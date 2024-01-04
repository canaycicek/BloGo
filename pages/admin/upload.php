<?php

// Only these origins are allowed to upload images
$accepted_origins = ["http://localhost", "https://www.blogo.canaycicek.com.tr"];

// Set the upload folder
$imageFolder = "../front/images/";

if(isset($_SERVER["HTTP_ORIGIN"])){
    // same-origin requests won't set an origin. If the origin is set, it must be valid.
    if(in_array($_SERVER["HTTP_ORIGIN"], $accepted_origins)){
        header("Access-Control-Allow-Origin: ".$_SERVER["HTTP_ORIGIN"]);
    }else{
        header("HTTP/1.1 403 Origin Denied");
        return;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Methods: POST, OPTIONS");
    return;
}

reset ($_FILES);
$temp = current($_FILES);
if (is_uploaded_file($temp['tmp_name'])){
    if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
        header("HTTP/1.1 400 Invalid file name.");
        return;
    }

    if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("jpg", "png"))) {
        header("HTTP/1.1 400 Invalid extension.");
        return;
    }

    $filetowrite = $imageFolder .time(). $temp['name'];
    move_uploaded_file($temp['tmp_name'], $filetowrite);
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? "https://" : "http://";
    $baseurl = $protocol . $_SERVER["HTTP_HOST"] . rtrim(dirname($_SERVER['REQUEST_URI']), "/") . "/";
    echo json_encode(array('location' => $baseurl . $filetowrite));
}else{
    header("HTTP/1.1 500 Server Error");
    return;
}
?>

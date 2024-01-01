<?php

class Functions extends Db
{
    public function control_input($data)
    {
        // $data = strip_tags($data);
        $data = htmlspecialchars($data);
        // $data = htmlentities($data);
        $data = stripslashes($data); #sql injection

        return $data;
    }
    public function saveImage($file)
    {
        $message = "";
        $uploadOk = 1;
        $fileTempPath = $file["tmp_name"];
        $fileName = $file["name"];
        $fileSize = $file["size"];
        $maxFileSize = (1024 * 1024) * 1;
        $fileExtensions = ["jpg", "jpeg", "png"];
        $fileNameArr = explode(".", $fileName);
        $fileNameNoExtension = $fileNameArr[0];
        $fileExtension = $fileNameArr[1];
        $uploadFolder = "C:/xampp/htdocs".$_ENV["URL_PREFIX"]."/assets/img/";

        if($fileSize > $maxFileSize){
            $message = "Dosya boyutu max 1 mb olmalı!<br>";
            $uploadOk = 0;
        }

        if(!in_array($fileExtension, $fileExtensions)){
            $message .= "Dosya uzantısı kabul edilmiyor<br>";
            $message .= "Kabul edilen dosya uzantıları : ".implode(", ", $fileExtensions)."<br>";
            $uploadOk = 0;
        }

        $newFileName = md5($fileNameNoExtension.time()).'.'.$fileExtension;
        $destPath = $uploadFolder.$newFileName;

        if($uploadOk == 0){
            $message .= "Dosya yüklenemedi<br>";
        }else{
            if(move_uploaded_file($fileTempPath, $destPath)){
                $message .= "Dosya yüklendi";
            }
        }

        return [
            "isSuccess" => $uploadOk,
            "message" => $message,
            "image" => $newFileName
        ];
    }
}

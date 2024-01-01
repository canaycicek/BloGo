<?php
include_once "../../libs/connect.php";
include_once "../classes/blog.class.php";
include_once "../classes/functions.class.php";
?>

<?php $blog = new Blog(); ?>
<?php $functions = new Functions(); ?>


<?php

    $id = $_GET["id"];

    $blog->deleteBlog($id);

    header("Location:" . $_ENV["URL_PREFIX"] . "/pages/admin/blog-control.php");

?>
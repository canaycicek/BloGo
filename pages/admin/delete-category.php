<?php
include_once "../../libs/connect.php";
include_once "../classes/blog.class.php";
include_once "../classes/category.class.php";
include_once "../classes/functions.class.php";
?>

<?php $categories = new Category(); ?>


<?php

    $id = $_GET["id"];

    $categories->deleteCategory($id);

    header("Location:".$_ENV["URL_PREFIX"]."/pages/admin/category-control.php");

?>
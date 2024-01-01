<?php
include_once "../../libs/connect.php";
include_once "../classes/category.class.php";
?>

<?php $categories = new Category(); ?>

<?php

    $id = $_GET["id"];

    $result = $categories->getCategoryById($id);
    $deleted = $result->deletedAdd = null;
    $categories->updateCategoryByDeleted($id, $deletedAdd);
    header("Location:" . $_ENV["URL_PREFIX"] . "/pages/admin/category-control.php");

?>
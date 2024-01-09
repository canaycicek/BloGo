<?php
include_once "../../libs/connect.php";
include_once "../classes/user.class.php";
?>

<?php $user = new User(); ?>


<?php

    $id = $_GET["id"];

    $user->deleteUser($id);

    header("Location:".$_ENV["URL_PREFIX"]."/pages/admin/users.php");

?>
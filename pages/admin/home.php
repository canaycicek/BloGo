<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
include_once "views/_side-navbar.php";
?>

<h2 class="m-3">
    <?= "Hoşgeldiniz ".$_COOKIE["name"]?>
    <i class="fa-regular fa-hand"></i>
</h2>


<?php include_once "views/_footer.php"; ?>
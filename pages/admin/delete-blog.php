<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
include_once "views/_side-navbar.php";

include_once "../../libs/connect.php";
include_once "classes/blog.class.php";
include_once "classes/functions.class.php";
?>

<?php $blog = new Blog(); ?>
<?php $functions = new Functions(); ?>


<?php

    $id = $_GET["id"];

    $blog->deleteBlog($id);

    header("Location: blog-control.php");

?>



<?php include_once "views/_footer.php"; ?>
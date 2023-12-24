<?php
include "views/_header.php";
include "views/_navbar.php";
include "views/_side-navbar.php";

include "../../libs/connect.php";
include "classes/blog.class.php";
include "classes/functions.class.php";
?>

<?php $blog = new Blog(); ?>
<?php $functions = new Functions(); ?>


<?php

    $id = $_GET["id"];

    $blog->deleteBlog($id);

    header("Location: blog-control.php");

?>



<?php include "views/_footer.php"; ?>
<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
include_once "views/_side-navbar.php";

include_once "../../libs/connect.php";
include_once "classes/blog.class.php";
include_once "classes/functions.class.php";
include_once "classes/category.class.php";
?>

<?php
    $categories = new Category();
    $functions = new Functions();
?>

<?php

    $categoryname = "";
    $categoryname_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // validate categoryname
        $input_categoryname = trim($_POST["categoryname"]);

        if(empty($input_categoryname)){
            $categoryname_err = "Kategori adı alanı boş geçilemez!";
        }elseif(strlen($input_categoryname) > 10){
            $categoryname_err = "Başlık alanı için çok fazla karakter girdiniz!";
        }else{
            $categoryname = $functions->control_input($input_categoryname);
        }


        if(empty($categoryname_err)){
            if($categories->createCategory($categoryname)){
                header("Location:" . $_ENV["URL_PREFIX"] . "/pages/admin/category-control.php");
            }else{
                echo "hata";
            }
        }
    }
    

?>
<div class="w-100 d-flex justify-content-center">
    <form class="w-50 my-3" action="" method="POST" novalidate>

        <div class="mb-3 form-floating">
            <input type="text" name="categoryname" id="categoryname" class="form-control
            <?= (!empty($categoryname_err)) ? 'is-invalid' : '' ?>" placeholder="Kategori Adı"
             value="<?= $categoryname; ?>">
            <label for="floatingInput" class="form-label">Kategori Adı</label>
            <span class="invalid-feedback"><?= $categoryname_err ?></span>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Kategori Ekle</button>
    </form>
</div>

<?php include_once "views/_footer.php"; ?>
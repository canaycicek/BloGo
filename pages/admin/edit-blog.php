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

    $title = $description = $sdescription = $image = $url = "";
    $title_err = $description_err = $sdescription_err = $image_err = $url_err = "";
    
    $id = $_GET["id"];
    $result = $blog->getBlogById($id);

    
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // validate title
        $input_title = trim($_POST["title"]);

        if(empty($input_title)){
            $title_err = "Başlık alanı boş geçilemez!";
        }else if(strlen($input_title) > 150){
            $title_err = "Başlık alanı için çok fazla karakter girdiniz!";
        }else{
            $title = $functions->control_input($input_title);
        }

        // validate shortDescription
        $input_sdescription = trim($_POST["sdescription"]);

        if(empty($input_sdescription)){
            $sdescription_err = "Kısa açıklama alanı boş geçilemez!";
        }else if(strlen($input_sdescription) > 25){
            $sdescription_err = "Kısa açıklama alanı için çok fazla karakter girdiniz!";
        }else{
            $sdescription = $functions->control_input($input_sdescription);
        }

        // validate description
        $input_description = trim($_POST["description"]);

        if(empty($input_description)){
            $description_err = "Açıklama alanı boş geçilemez!";
        }else if(strlen($input_description) < 10){
            $description_err = "Açıklama alanı için çok az karakter girdiniz!";
        }else{
            $description = $functions->control_input($input_description);
        }

        // validate url
        $input_url = trim($_POST["url"]);

        if(empty($input_url)){
            $url_err = "Url alanı boş geçilemez!";
        }else{
            $url = $functions->control_input($input_url);
        }

        $is_active = $functions->control_input(isset($_POST["is_active"])?1:0);

        if(empty($title_err) && empty($sdescription_err) && empty($description_err) && empty($url_err)){
            if($blog->updateBlog($id, $title, $sdescription, $description, $category, $url, $is_active)){
                header("Location: blog-control.php");
            }else{
                echo "hata";
            }
        }
    }
?>

<div class="w-100 d-flex justify-content-center">
    <form class="w-50 my-3" action="" method="POST" novalidate>

        <div class="mb-3 form-floating">
            <input type="text" name="title" id="title" class="form-control <?= (!empty($title_err)) ? 'is-invalid' : '' ?>" placeholder="Başlık" value="<?= $result->title; ?>">
            <label for="floatingInput" class="form-label">Başlık</label>
            <span class="invalid-feedback"><?php echo $title_err ?></span>
        </div>

        <div class="mb-3 form-floating">
            <input type="text" name="sdescription" id="sdescription" class="form-control <?= (!empty($sdescription_err)) ? 'is-invalid' : '' ?>" placeholder="Kısa Açıklama" value="<?= $result->short_description; ?>">
            <label for="floatingInput" class="form-label">Kısa Açıklama</label>
            <span class="invalid-feedback"><?php echo $sdescription_err ?></span>
        </div>

        <div class="mb-3 form-floating">
            <input type="text" name="description" id="description" class="form-control <?= (!empty($description_err)) ? 'is-invalid' : '' ?>" placeholder="Açıklama" value="<?= $result->description; ?>">
            <label for="floatingInput" class="form-label">Açıklama</label>
            <span class="invalid-feedback"><?php echo $description_err ?></span>
        </div>

        <div class="mb-3 form-floating">
            <input type="text" name="url" id="url" class="form-control <?= (!empty($url_err)) ? 'is-invalid' : '' ?>" placeholder="Url" value="<?= $result->url; ?>">
            <label for="floatingInput" class="form-label">Url</label>
            <span class="invalid-feedback"><?php echo $url_err ?></span>
        </div>

        <div class="mb-3">
            <input type="checkbox" name="is_active" id="is_active"
            <?php if($result->is_active) {echo "checked";}?>>
            <label for="is_active">Aktif</label>
        </div>

        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Güncelle</button>
    </form>
</div>

<?php include "views/_footer.php"; ?>
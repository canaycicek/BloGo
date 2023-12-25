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
$blog = new Blog();
$categories = new Category();
$functions = new Functions();
?>

<?php

$title = $description = $sdescription = $image = $url = $category = "";
$title_err = $description_err = $sdescription_err = $image_err = $url_err = $category_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // validate title
    $input_title = trim($_POST["title"]);

    if (empty($input_title)) {
        $title_err = "Başlık alanı boş geçilemez!";
    } elseif (strlen($input_title) > 150) {
        $title_err = "Başlık alanı için çok fazla karakter girdiniz!";
    } else {
        $title = $functions->control_input($input_title);
    }

    // validate shortDescription
    $input_sdescription = trim($_POST["sdescription"]);

    if (empty($input_sdescription)) {
        $sdescription_err = "Kısa açıklama alanı boş geçilemez!";
    } elseif (strlen($input_sdescription) > 25) {
        $sdescription_err = "Kısa açıklama alanı için çok fazla karakter girdiniz!";
    } else {
        $sdescription = $functions->control_input($input_sdescription);
    }

    // validate description
    $input_description = trim($_POST["description"]);

    if (empty($input_description)) {
        $description_err = "Açıklama alanı boş geçilemez!";
    } elseif (strlen($input_description) < 10) {
        $description_err = "Açıklama alanı için çok az karakter girdiniz!";
    } else {
        $description = $functions->control_input($input_description);
    }

    // validate category
    $select_category = $_POST["category"];

    if ($select_category == "empty") {
        $category_err = "Kategori alanı boş geçilemez!";
    } else {
        $category = $functions->control_input($select_category);
    }


    // validate url
    $input_url = trim($_POST["url"]);

    if (empty($input_url)) {
        $url_err = "Url alanı boş geçilemez!";
    } else {
        $url = $functions->control_input($input_url);
    }

    if (
        empty($title_err)
        && empty($sdescription_err)
        && empty($description_err)
        && empty($url_err)
        && empty($category_err)
    ) {
        if ($blog->createBlog($title, $sdescription, $description, $category, $url)) {
            header("Location:" . $_ENV["URL_PREFIX"] . "/pages/admin/blog-control.php");
        } else {
            echo "hata";
        }
    }
}

?>

<div class="w-100 d-flex justify-content-center">
    <form class="w-50 my-3" action="" method="POST" novalidate>

        <div class="mb-3 form-floating">
            <input type="text" name="title" id="title" class="form-control
            <?= (!empty($title_err)) ? 'is-invalid' : '' ?>" placeholder="Başlık" value="<?= $title; ?>">
            <label for="floatingInput" class="form-label">Başlık</label>
            <span class="invalid-feedback"><?= $title_err ?></span>
        </div>

        <div class="mb-3 form-floating">
            <input type="text" name="sdescription" id="sdescription" class="form-control
             <?= (!empty($sdescription_err)) ? 'is-invalid' : '' ?>"
              placeholder="Kısa Açıklama" value="<?= $sdescription; ?>">
            <label for="floatingInput" class="form-label">Kısa Açıklama</label>
            <span class="invalid-feedback"><?= $sdescription_err ?></span>
        </div>

        <div class="mb-3 form-floating">
            <input type="text" name="description" id="description" class="form-control
             <?= (!empty($description_err)) ? 'is-invalid' : '' ?>" placeholder="Açıklama"
              value="<?= $description; ?>">
            <label for="floatingInput" class="form-label">Açıklama</label>
            <span class="invalid-feedback"><?= $description_err ?></span>
        </div>

        <div class="form-group mb-3">
            <select name="category" id="category" class="form-select form-select-lg
             <?= (!empty($category_err)) ? 'is-invalid' : '' ?>" aria-label="Large select example">
                <option value="empty">Kategori Seçiniz</option>
                <?php foreach ($categories->getCategories() as $item) : ?>
                    <option value="<?= $item->id ?>"
                     <?= (isset($_POST['category']) && $_POST['category'] == $item->id) ? 'selected' : '' ?>
                     ><?= $item->name ?></option>
                <?php endforeach; ?>
            </select>
            <span class="invalid-feedback"><?= $category_err ?></span>
        </div>

        <div class="mb-3 form-floating">
            <input type="text" name="url" id="url" class="form-control
             <?= (!empty($url_err)) ? 'is-invalid' : '' ?>" placeholder="Url" value="<?= $url; ?>">
            <label for="floatingInput" class="form-label">Url</label>
            <span class="invalid-feedback"><?= $url_err ?></span>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Blog Ekle</button>
    </form>
</div>

<?php include_once "views/_footer.php"; ?>
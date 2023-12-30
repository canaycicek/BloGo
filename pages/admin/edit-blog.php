<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
include_once "views/_side-navbar.php";

include_once "../../libs/connect.php";
include_once "classes/blog.class.php";
include_once "classes/functions.class.php";
include_once "classes/category.class.php";
?>

<?php $blog = new Blog(); ?>
<?php $categories = new Category(); ?>
<?php $functions = new Functions(); ?>

<?php

$title = $description = $sdescription = $image = $url = "";
$title_err = $description_err = $sdescription_err = $image_err = $url_err = "";

$id = $_GET["id"];
$result = $blog->getBlogById($id);


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

    // validate image
    if (empty($_FILES["image"]["name"])) {
        $image = $functions->control_input($result->image_url);
    } else {
        $result = $functions->saveImage($_FILES["image"]);

        if ($result["isSuccess"] == 0) {
            $image_err = $result["message"];
        } else {
            $image = $functions->control_input($result["image"]);
        }
    }

    // validate url
    $input_url = trim($_POST["url"]);

    if (empty($input_url)) {
        $url_err = "Url alanı boş geçilemez!";
    } else {
        $url = $functions->control_input($input_url);
    }

    $is_active = $functions->control_input(isset($_POST["is_active"]) ? 1 : 0);
    $category_id = $functions->control_input($_POST["category"]);

    // update blog
    if (
        empty($title_err) && empty($sdescription_err) && empty($description_err)
        && empty($category_err) && empty($url_err)
    ) {
        if ($blog->updateBlog($id, $title, $sdescription, $description, $category_id, $image, $url, $is_active)) {
            header("Location:" . $_ENV["URL_PREFIX"] . "/pages/admin/blog-control.php");
        } else {
            echo "hata";
        }
    }
}
?>

<div class="w-100 d-flex justify-content-center">
    <form class="my-3 w-100 d-flex align-items-center column-gap-4" action="" method="POST" novalidate enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img class="w-100" src="<?= $_ENV["URL_PREFIX"] ?>/assets/img/<?= $result->image_url ?>" alt="<?= $result->title ?>">
                </div>
                <div class="col-8">
                    <div class="mb-3 form-floating">
                        <input type="text" name="title" id="title" class="form-control
                        <?= (!empty($title_err)) ? 'is-invalid' : '' ?>" placeholder="Başlık" value="<?= $result->title; ?>">
                        <label for="floatingInput" class="form-label">Başlık</label>
                        <span class="invalid-feedback"><?php echo $title_err ?></span>
                    </div>

                    <div class="mb-3 form-floating">
                        <input type="text" name="sdescription" id="sdescription" class="form-control
                        <?= (!empty($sdescription_err)) ? 'is-invalid' : '' ?>" placeholder="Kısa Açıklama" value="<?= $result->short_description; ?>">
                        <label for="floatingInput" class="form-label">Kısa Açıklama</label>
                        <span class="invalid-feedback"><?php echo $sdescription_err ?></span>
                    </div>

                    <div class="mb-3 form-floating">
                        <h5>Açıklama</h5>
                        <textarea name="description" id="description" class="form-control<?= (!empty($description_err)) ? 'is-invalid' : '' ?>">
                            <?= $result->description; ?>
                        </textarea>
                        <span class="invalid-feedback"><?= $description_err ?></span>
                    </div>

                    <div class="form-group mb-3">
                        <select name="category" id="category" class="form-select form-select-lg
                        <?= (!empty($category_err)) ? 'is-invalid' : '' ?>" aria-label="Large select example">
                            <?php foreach ($categories->getCategoriesByIsActive() as $item) : ?>
                                <option value="<?= $item->id ?>" <?= (isset($_POST['category']) && $_POST['category'] == $item->id || $result->id == $item->id) ? 'selected' : '' ?>>
                                    <?= $item->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="invalid-feedback"><?= $category_err ?></span>
                    </div>

                    <div class="mb-3">
                        <label for="floatingInput" class="form-label">Resim</label>
                        <input type="file" name="image" id="image" class="form-control form-control-lg <?= (!empty($image_err)) ? 'is-invalid' : '' ?>">
                        <span class="invalid-feedback"><?= $image_err ?></span>
                    </div>

                    <div class="mb-3 form-floating">
                        <input type="text" name="url" id="url" class="form-control
                            <?= (!empty($url_err)) ? 'is-invalid' : '' ?>" placeholder="Url" value="<?= $result->url; ?>">
                        <label for="floatingInput" class="form-label">Url</label>
                        <span class="invalid-feedback"><?php echo $url_err ?></span>
                    </div>

                    <div class="mb-3">
                        <input type="checkbox" name="is_active" id="is_active" <?php if ($result->is_active) {
                                                                                    echo "checked";
                                                                                } ?>>
                        <label for="is_active">Aktif</label>
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Güncelle</button>
                </div>
            </div>
        </div>

    </form>
</div>


<?php include_once "views/_footer.php"; ?>
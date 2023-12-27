<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
include_once "views/_side-navbar.php";

include_once "../../libs/connect.php";
include_once "classes/functions.class.php";
include_once "classes/category.class.php";
?>

<?php $categories = new Category(); ?>
<?php $functions = new Functions(); ?>

<?php

$name = "";
$name_err = "";

$id = $_GET["id"];
$result = $categories->getCategoryById($id);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // validate category
    $input_category = $_POST["name"];

    if ($input_category == "") {
        $name_err = "Kategori alanı boş geçilemez!";
    } else {
        $name = $functions->control_input($input_category);
    }

    $is_active = $functions->control_input(isset($_POST["is_active"]) ? 1 : 0);

    if (
        empty($name_err)
    ) {
        if ($categories->updateCategory($id, $name, $is_active)) {
            header("Location:" . $_ENV["URL_PREFIX"] . "/pages/admin/category-control.php");
        } else {
            echo "hata";
        }
    }
}
?>
<div class="w-100 d-flex justify-content-center">
    <form class="w-50 my-3" action="" method="POST" novalidate>

        <div class="mb-3 form-floating">
            <input type="text" name="name" id="name" class="form-control
            <?= (!empty($name_err)) ? 'is-invalid' : '' ?>" placeholder="Başlık" value="<?= $result->name; ?>">
            <label for="floatingInput" class="form-label">Kategori İsmi</label>
            <span class="invalid-feedback"><?= $name_err ?></span>
        </div>

        <div class="mb-3">
            <input type="checkbox" name="is_active" id="is_active" <?php if ($result->is_active) {echo "checked";} ?>>
            <label for="is_active">Aktif</label>
        </div>

        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Güncelle</button>
    </form>
</div>

<?php include_once "views/_footer.php"; ?>
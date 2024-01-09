<?php
include_once "../../libs/connect.php";
include_once "../classes/functions.class.php";
include_once "../classes/category.class.php";
include_once "../classes/user.class.php";
?>

<?php $categories = new Category(); ?>
<?php $functions = new Functions(); ?>
<?php $user = new User(); ?>

<?php
    $rol = "";
    $rol_err = "";

    $id = $_GET["id"];
    $result = $user->getUserById($id);

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rol_id = $functions->control_input($_POST["rol"]);

        if ($user->updateUser($id, $rol_id)) {
            header("Location:" . $_ENV["URL_PREFIX"] . "/pages/admin/users.php");
        } else {
            echo "hata";
        }
    }
?>

<?php

include_once "views/_header.php";
include_once "views/_navbar.php";
include_once "views/_side-navbar.php";

?>
<div class="w-100 d-flex justify-content-center">
    <form class="w-50 my-3" action="" method="POST" novalidate>

        <div class="form-group mb-3">
            <select name="rol" id="rol" class="form-select form-select-lg
            <?= (!empty($rol_err)) ? 'is-invalid' : '' ?>" aria-label="Large select example">
                <?php foreach ($user->getRoles() as $item):?>
                    
                    <option value="<?= $item->id ?>" <?php if($item->id == $result->rol_id) {echo "selected";} else{"";} ?>>
                        <?= $item->rol_name ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Güncelle</button>
    </form>
</div>

<?php include_once "views/_footer.php"; ?>
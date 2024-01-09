<?php
include_once "../../libs/connect.php";
include_once "../classes/blog.class.php";
include_once "../classes/functions.class.php";
include_once "../classes/category.class.php";
include_once "../classes/user.class.php";
?>

<?php
$blog = new Blog();
$categories = new Category();
$functions = new Functions();
$user = new User();
?>

<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
include_once "views/_side-navbar.php";
?>

<div class="w-100 mx-5 mt-3">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 70px;">#</th>
                <th style="width: 150px;">İsim</th>
                <th>Kullanıcı Adı</th>
                <th>E-Mail</th>
                <th style="width: 100px;">Rol</th>
                <th style="width: 150px;"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($user->getUsers() as $person) : ?>
                <tr>
                    <th><?= $person->id ?></th>
                    <th><?= $person->name ?></th>
                    <td><?= $person->username ?></td>
                    <td><?= $person->email ?></td>
                    <td><?= $person->rol_name ?></td>
                    <td>
                        <a class="btn btn-primary" href="edit-user.php?id=<?= $person->id ?>">Düzenle</a>
                        <a class="btn btn-danger" href="delete-user.php?id=<?= $person->id ?>">Sil</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once "views/_footer.php"; ?>
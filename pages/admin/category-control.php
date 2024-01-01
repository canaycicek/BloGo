<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
include_once "views/_side-navbar.php";

include_once "../../libs/connect.php";
include_once "../classes/blog.class.php";
include_once "../classes/functions.class.php";
include_once "../classes/category.class.php";
?>

<?php
$blog = new Blog();
$categories = new Category();
$functions = new Functions();
?>

<div class="w-100 mx-5 mt-3">
    <div class="card mb-2">
        <a href="create-category.php" class="btn btn-primary" type="submit">
            <i class="fa-solid fa-plus"></i>
            Yeni Kategori
        </a>
    </div>
    <!-- Category Table Start -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" style="width: 70px;">#</th>
                <th scope="col" >Kategori İsmi</th>
                <th scope="col" style="width: 50px;">Aktiflik</th>
                <th scope="col" style="width: 150px;"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($categories->getCategories() as $item): ?>
                <tr class="<?php if($item->deletedAdd !== null) {echo "table-danger";} else{echo "table-success";} ?>">
                    <th scope="col"><?= $item->id ?></th>
                    <td><?= $item->name ?></td>
                    <td>
                        <?php if($item->is_active == 1): ?>
                            <i class="fa-solid fa-check"></i>
                        <?php else: ?>
                            <i class="fa-solid fa-xmark"></i>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($item->deletedAdd == null): ?>
                            <a class="btn btn-primary" href="edit-category.php?id=<?= $item->id ?>">Düzenle</a>
                            <a class="btn btn-danger"href="delete-category.php?id=<?= $item->id ?>">Sil</a>
                        <?php else: ?>
                            <a class="btn btn-warning" href="restore.php?id=<?= $item->id ?>">Geri Yükle</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Category Table End -->
</div>


<?php include_once "views/_footer.php"; ?>
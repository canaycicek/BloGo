<?php
include "views/_header.php";
include "views/_navbar.php";
include "views/_side-navbar.php";

include "classes/db.class.php";
include "classes/blog.class.php";
include "classes/functions.class.php";
?>

<?php $blog = new Blog(); ?>
<?php $functions = new Functions(); ?>

<?php if($blog->getBlogs()): ?>

    <div class="w-100 mx-5 mt-3">
        <div class="card mb-2">
            <a href="create-blog.php" class="btn btn-primary" type="submit">
                <i class="fa-solid fa-plus"></i>
                Yeni Blog
            </a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 70px;">#</th>
                    <th>Başlık</th>
                    <th>Url</th>
                    <th style="width: 100px;">Kategori</th>
                    <th style="width: 50px;">Aktiflik</th>
                    <th style="width: 150px;"></th>
                </tr>
            </thead>
            <?php foreach($blog->getBlogs() as $item): ?>
                <tbody class="table-group-divider">
                    <tr>
                        <th><?= $item->id ?></th>
                        <td><?= $item->title ?></td>
                        <td><?= $item->url ?></td>
                        <td>Siyaset</td>
                        <td>
                            <?php if($item->is_active == 1): ?>
                                <i class="fa-solid fa-check"></i>
                            <?php else: ?>
                                <i class="fa-solid fa-xmark"></i>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="edit-blog.php?id=<?= $item->id ?>">Düzenle</a>
                            <a class="btn btn-danger">Sil</a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>

<?php else: ?>

    <div class="alert alert-warning">
        Blog bulunamadı!
    </div>

<?php endif; ?>

<?php include "views/_footer.php"; ?>
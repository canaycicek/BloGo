<?php
include "views/_header.php";
include "views/_navbar.php";
include "views/_side-navbar.php";
?>

<div class="w-100 mx-5 mt-3">
    <div class="card mb-2">
        <a href="create-category.php" class="btn btn-primary" type="submit">
            <i class="fa-solid fa-plus"></i>
            Yeni Kategori
        </a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 70px;">#</th>
                <th>Kategori İsmi</th>
                <th style="width: 50px;">Aktiflik</th>
                <th style="width: 150px;"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <th>1</th>
                <td>Siyaset</td>
                <td>
                    <i class="fa-solid fa-check"></i>
                </td>
                <td>
                    <a class="btn btn-primary">Düzenle</a>
                    <a class="btn btn-danger">Sil</a>
                </td>
            </tr>
            <tr>
                <th>2</th>
                <td>Spor</td>
                <td>
                    <i class="fa-solid fa-check"></i>
                </td>
                <td>
                    <a class="btn btn-primary">Düzenle</a>
                    <a class="btn btn-danger">Sil</a>
                </td>
            </tr>
            <tr>
                <th>3</th>
                <td>Yemek</td>
                <td>
                    <i class="fa-solid fa-xmark"></i>
                </td>
                <td>
                    <a class="btn btn-primary">Düzenle</a>
                    <a class="btn btn-danger">Sil</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<?php include "views/_footer.php"; ?>
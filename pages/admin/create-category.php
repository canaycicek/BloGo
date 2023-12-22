<?php
include "views/_header.php";
include "views/_navbar.php";
include "views/_side-navbar.php";
?>
<div class="w-100 d-flex justify-content-center">
    <form class="w-50 my-3" action="" method="POST" novalidate>

        <div class="mb-3 form-floating">
            <input type="text" name="categoryname" id="categoryname" class="form-control" placeholder="Kategori Adı">
            <label for="floatingInput" class="form-label">Kategori Adı</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Kategori Ekle</button>
    </form>
</div>

<?php include "views/_footer.php"; ?>
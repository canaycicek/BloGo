<?php
session_start();

if(!isset($_SESSION['login_user'])){
   header("location: login.php");
}
?>
<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
?>

<!-- Profile Page Start -->
<div class="container mt-4">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <img src="https://picsum.photos/600?random=12968" class="img-fluid rounded-circle border border-success border-5 pp" alt="picture">
        <h1 class="mt-2">
            Can Aycicek
        </h1>
        <p class="fw-light">Admin | Bloger | Okuyucu</p>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-warning">
                <i class="fa-solid fa-key"></i>
                Şifre Yenileme
            </button>
            <button type="button" class="btn btn-danger">
                <i class="fa-solid fa-power-off"></i>
                Çıkış Yap
            </button>
            <button type="button" class="btn btn-success">
                <i class="fa-regular fa-pen-to-square"></i>
                Profilini Güncelle
            </button>
        </div>
    </div>

    <hr class="my-5">

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title">Bugün Kaç Blog Okudum ?</h5>
                    <hr class="w-100">
                    <span class="fw-bold fs-1">25</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title">En Çok Okuduğum Bloger</h5>
                    <hr class="w-100">
                    <span class="fw-bold fs-1">Tufan Öztürk</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title">İlgilendiğim Kategoriler</h5>
                    <hr class="w-100">
                    <span class="fw-bold fs-1">Spor</span>
                    <span class="fw-bold fs-1">Müzik</span>
                    <span class="fw-bold fs-1">Yazılım</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Page End -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?= $_ENV["URL_PREFIX"] ?>/assets/script.js"></script>
</body>

</html>
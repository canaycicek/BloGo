<?php
include_once "../../../libs/connect.php";
include_once "../../classes/blog.class.php";
include_once "../../classes/category.class.php";
include_once "../../classes/functions.class.php";

$blog = new Blog();
$categories = new Category();
$functions = new Functions();

?>
<?php include_once "../views/_navbar.php";?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $_ENV["URL_PREFIX"] ?>/assets/style.css">
    <title>Document</title>
</head>

<body>
<!-- Register Page Start -->
<div class="container mt-4">
    <div class="card mx-auto" style="width: 27rem;">
        <div class="card-body">
            <form action="" method="POST" novalidate>
                <h1 class="p-0 mb-4">Kayıt Ol</h1>

                <div class="mb-3 form-floating">
                    <input type="text" name="name" id="name" class="form-control" placeholder="İsim">
                    <label for="floatingInput" class="form-label">İsim</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Kullanıcı Adı">
                    <label for="floatingInput" class="form-label">Kullanıcı Adı</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-Mail">
                    <label for="floatingInput" class="form-label">E-Mail</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Parola">
                    <label for="floatingInput" class="form-label">Parola</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Parola Tekrar">
                    <label for="floatingInput" class="form-label">Parola Tekrar</label>
                </div>

                <p>
                    <a class="link-underline link-underline-opacity-0" href="login.php">Zaten bir hesabım var?</a>
                </p>

                <button class="btn btn-primary w-100 py-2" type="submit">Kayıt Ol</button>

            </form>
        </div>
    </div>
</div>
<!-- Register Page End -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?= $_ENV["URL_PREFIX"] ?>/assets/script.js"></script>
</body>

</html>
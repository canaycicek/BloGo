<?php
include_once "../../../libs/connect.php";
include_once "../../classes/blog.class.php";
include_once "../../classes/category.class.php";
include_once "../../classes/functions.class.php";
include_once "../../classes/user.class.php";

$blog = new Blog();
$categories = new Category();
$functions = new Functions();
$user = new User();

?>

<?php
$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // validate username
    $input_username = trim($_POST["username"]);

    if (empty($input_username)) {
        $username_err = "Kullanıcı Adı alanı boş geçilemez!";
    } else {
        $username = $functions->control_input($input_username);
    }

    // validate password
    $input_password = trim($_POST["password"]);

    if (empty($input_password)) {
        $password_err = "Parola alanı boş geçilemez!";
    } else {
        $rawPassword = $functions->control_input($input_password);
    }
    
    // control login
    $result = $user->authenticateUser($username, $rawPassword);
    if($result){
        header("Location:".$_ENV["URL_PREFIX"]."/pages/front/profile.php");

        // How long will the cookie persist
        $expirationTime = time() + (3600*12);

        // Create cookie
        setcookie("userLogin", $username, $expirationTime, '/');
    }else{
        echo "Kullanıcı girişi başarısız!";
    }
}

?>

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

<?php include_once "../views/_navbar.php";?>

<body>

<!-- Login Page Start -->
<div class="container mt-4">
    <div class="card mx-auto" style="width: 27rem;">
        <div class="card-body">
            <form action="" method="POST" novalidate>
                <h1 class="mb-4">Giriş Yap</h1>

                <div class="form-floating mb-4">
                    <input type="text" class="form-control <?= (!empty($username_err)) ? 'is-invalid' : '' ?>" name="username" id="username" placeholder="Kullanıcı Adı" value="<?= $username; ?>">
                    <label for="floatingInput">Kullanıcı Adı</label>
                    <span class="invalid-feedback"><?= $username_err ?></span>
                </div>

                <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control <?= (!empty($password_err)) ? 'is-invalid' : '' ?>" id="password" placeholder="Parola">
                    <label for="floatingPassword">Parola</label>
                    <span class="invalid-feedback"><?= $password_err ?></span>
                </div>

                <p>
                    <a class="link-underline link-underline-opacity-0" href="#">Şifremi Unuttum</a>
                </p>

                <p>
                    <a class="link-underline link-underline-opacity-0" href="register.php">Kayıt Ol</a>
                </p>

                <button class="btn btn-primary w-100 py-2" type="submit">Giriş Yap</button>

            </form>
        </div>
    </div>
</div>



<!-- Login Page End -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?= $_ENV["URL_PREFIX"] ?>/assets/script.js"></script>
</body>

</html>
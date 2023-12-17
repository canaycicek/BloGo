<?php include "views/_header.php"; ?>
<?php include "views/_navbar.php"; ?>

<!-- Login Page Start -->
<div class="container" style="min-height: 100vh;">
    <div class="card mx-auto" style="width: 27rem;">
        <div class="card-body">
            <form action="" method="POST" novalidate>
                <h1 class="mb-4">Giriş Yap</h1>

                <div class="form-floating mb-4">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Kullanıcı Adı">
                    <label for="floatingInput">Kullanıcı Adı</label>
                </div>

                <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Parola">
                    <label for="floatingPassword">Parola</label>
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

<?php include "views/_footer.php"; ?>
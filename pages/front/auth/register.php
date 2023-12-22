<?php
    include "../views/_header.php"; 
    include "../views/_navbar.php";
?>
<!-- Register Page Start -->
<div class="container mt-4" style="min-height: 100vh;">
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

<?php include "../views/_footer.php"; ?>
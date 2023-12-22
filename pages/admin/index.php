<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-black sticky-top">
        <div class="container-fluid">
            <i class="fa-solid fa-bars white me-4 fa-xl"></i>
            <img class="navbar-brand" src="<?= $_ENV['URL_PREFIX']?>/assets/img/svg/navbar.svg"></img>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-power-off"></i>
                            Çıkış Yap
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="sideNav">
            <nav>
                <div class="d-flex flex-column bg-black" style="width: max-content; height: 100vh;">
                    <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="home.php">Home</a>
                    <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="#">Blog Kontrol</a>
                    <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="#">Blog Ekleme</a>
                    <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="#">Blogerlar</a>
                    <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="#">Home</a>
                    <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="#">Home</a>
                </div>
            </nav>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="<?= $_ENV['URL_PREFIX']?>/assets/script.js"></script>
</body>

</html>
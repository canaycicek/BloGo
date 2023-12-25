<nav class="navbar navbar-expand-lg bg-black sticky-top">
    <div class="container-fluid">
        <i class="fa-solid fa-bars white me-4 fa-xl"></i>
        <img class="navbar-brand" alt="image" src="<?= $_ENV["URL_PREFIX"] ?>/assets/img/svg/navbar.svg"></img>
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
<!-- Navigation Bar Start -->
<nav class="navbar navbar-expand-lg bg-black sticky-top">
    <div class="container-fluid d-flex justify-content-between">
        <ul class="navbar-nav mb-2 mb-lg-0 d-flex column-gap-2">
            <li class="nav-item">
                <a class="navbar-brand nav-link" href="<?= $_ENV["URL_PREFIX"] ?>/pages/front/index.php">
                    <img src="<?= $_ENV["URL_PREFIX"] ?>/assets/img/svg/navbar.svg" alt="Blogo">
                </a>
            </li>
            <?php if($user->isLoggedin()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategoriler
                    </a>
                    <ul class="dropdown-menu">
                        <?php foreach ($categories->getCategoriesByIsActive() as $item): ?>
                            <li>
                                <a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"] ?>/pages/front/category.php?id=<?= $item->id ?>"><?= $item->name ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $_ENV["URL_PREFIX"] ?>/pages/front/populer.php">Popüler Blogerlar</a>
                </li>
            <?php endif; ?>
        </ul>
        <form class="input-group searchInput">
            <input class="form-control" id="searchBox" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" id="btnSearch" type="submit">Search</button>
        </form>
        <!-- <div class="search-box">
            <button class="btn-search"><i class="fas fa-search"></i></button>
            <input type="text" class="input-search" placeholder="Type to Search...">
        </div> -->
        <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center column-gap-2">
            <?php if($user->isBloger()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $_ENV["URL_PREFIX"] ?>/pages/admin/home.php">
                        Dashboard
                    </a>
                </li>
            <?php endif; ?>
            <?php if(!$user->isLoggedin()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $_ENV["URL_PREFIX"] ?>/pages/front/auth/register.php">
                        <i class="fa-solid fa-plus"></i>
                        Kayıt Ol
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $_ENV["URL_PREFIX"] ?>/pages/front/auth/login.php">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        Giriş Yap
                    </a>
                </li>
            <?php endif; ?>
            <?php if($user->isLoggedin()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $_ENV["URL_PREFIX"] ?>/pages/front/profile.php">
                        <i class="fa-regular fa-circle-user"></i>
                        Profil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $_ENV["URL_PREFIX"] ?>/pages/front/auth/logout.php">
                        <i class="fa-solid fa-power-off"></i>
                        Çıkış Yap
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<!-- Navigation Bar End -->
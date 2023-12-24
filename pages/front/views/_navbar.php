<!-- Navigation Bar Start -->
<nav class="navbar navbar-expand-lg bg-black sticky-top">
    <div class="container-fluid d-flex justify-content-between">
        <ul class="navbar-nav mb-2 mb-lg-0 d-flex column-gap-2">
            <li class="nav-item">
                <a class="navbar-brand nav-link" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/index.php">
                    <svg width="78" height="30" viewBox="0 0 78 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.608 12.4029C8.92666 12.4029 8.10333 11.9829 8.138 11.1429C8.138 10.3543 8.944 9.96 10.556 9.96C10.9373 9.96 11.3013 10.0029 11.648 10.0886C12.22 9.52286 12.506 8.66571 12.506 7.51714C12.506 5.52857 11.1627 4.53429 8.476 4.53429C7.072 4.53429 5.73733 4.83429 4.472 5.43429C4.004 5.65714 3.57933 5.86286 3.198 6.05143C2.834 6.24 2.496 6.33429 2.184 6.33429C1.872 6.33429 1.716 6.24 1.716 6.05143C1.716 5.82857 1.88933 5.50286 2.236 5.07429C2.58266 4.62857 3.068 4.18286 3.692 3.73714C5.28666 2.64 7.098 2.08286 9.126 2.06571C11.778 2.06571 13.728 2.58857 14.976 3.63429C16.0507 4.50857 16.588 5.7 16.588 7.20857C16.588 8.95714 15.7213 10.2943 13.988 11.22C15.652 12.1629 16.64 13.32 16.952 14.6914C17.056 15.1714 17.108 15.8057 17.108 16.5943C17.108 17.3829 16.8913 18.1286 16.458 18.8314C16.0247 19.5343 15.444 20.1257 14.716 20.6057C13.26 21.5314 11.3967 21.9943 9.126 21.9943C7.514 21.9943 5.72 21.6343 3.744 20.9143C2.42667 20.4343 1.456 19.86 0.831998 19.1914C0.519998 18.8657 0.363998 18.54 0.363998 18.2143C0.381332 17.8886 0.545998 17.7257 0.857998 17.7257C1.18733 17.7257 1.80267 17.8371 2.704 18.06V18.0343C2.704 16.6971 2.86 15.3257 3.172 13.92C3.70933 11.4686 4.33333 9.54857 5.044 8.16C5.80666 6.61714 6.59533 5.84571 7.41 5.84571C7.63533 5.84571 7.748 6.23143 7.748 7.00286C7.748 7.77429 7.67 8.56286 7.514 9.36857C7.37533 10.1743 7.21933 10.9714 7.046 11.76C6.89 12.5314 6.734 13.2343 6.578 13.8686C6.43933 14.5029 6.37 14.9571 6.37 15.2314L6.11 19.1143C7.13266 19.3886 7.99933 19.5257 8.71 19.5257C9.42066 19.5257 10.062 19.4057 10.634 19.1657C12.0727 18.5657 12.792 17.52 12.792 16.0286C12.792 15.1371 12.7053 14.4 12.532 13.8171C12.3587 13.2343 12.0467 12.72 11.596 12.2743C11.1973 12.36 10.868 12.4029 10.608 12.4029ZM24.9862 21.5057C22.5075 21.5229 20.8175 20.6057 19.9162 18.7543C19.6042 18.1029 19.4482 17.2886 19.4482 16.3114C19.4482 15.3171 19.5349 14.2629 19.7082 13.1486C20.0549 10.92 20.7222 8.86286 21.7102 6.97714C22.2129 6.01714 22.7762 5.19429 23.4002 4.50857C24.7695 3 26.2949 2.25429 27.9762 2.27143C28.7215 2.27143 29.3022 2.47714 29.7182 2.88857C30.1515 3.28286 30.3682 3.85714 30.3682 4.61143C30.3682 5.36571 30.1429 6.12857 29.6922 6.9C29.2415 7.65429 28.6609 8.44286 27.9502 9.26571C27.2569 10.0714 26.4855 10.92 25.6362 11.8114C24.7869 12.7029 23.9549 13.6714 23.1402 14.7171V15.7457C23.1402 16.7057 23.3482 17.4086 23.7642 17.8543C24.1802 18.3 24.6655 18.5229 25.2202 18.5229C26.7109 18.5229 28.0282 17.7943 29.1722 16.3371C29.6402 15.7371 29.9955 15.4371 30.2382 15.4371C30.4809 15.4371 30.6022 15.7286 30.6022 16.3114C30.6022 16.8943 30.4375 17.4943 30.1082 18.1114C29.7962 18.7114 29.3802 19.2686 28.8602 19.7829C28.3402 20.28 27.7422 20.6914 27.0662 21.0171C26.3902 21.3429 25.6969 21.5057 24.9862 21.5057ZM26.3902 7.69714C26.7542 7.25143 27.0402 6.84857 27.2482 6.48857C27.4562 6.12857 27.5602 5.76 27.5602 5.38286C27.5602 4.98857 27.4215 4.79143 27.1442 4.79143C26.5375 4.79143 25.8615 5.40857 25.1162 6.64286C24.3882 7.87714 23.8422 9.49714 23.4782 11.5029C24.0675 10.6114 24.6049 9.86571 25.0902 9.26571C25.5929 8.66571 26.0262 8.14286 26.3902 7.69714ZM39.5692 19.2429C38.1998 20.8371 36.5532 21.6343 34.6292 21.6343C32.7225 21.6343 31.2925 21.1543 30.3392 20.1943C29.3858 19.2171 28.9178 18.0086 28.9352 16.5686C28.9178 14.5286 29.5678 12.7714 30.8852 11.2971C32.2025 9.82286 33.9272 9.08571 36.0592 9.08571C37.0298 9.08571 37.8098 9.20571 38.3992 9.44571C39.4218 9.85714 39.9332 10.2429 39.9332 10.6029C39.9332 10.8771 39.2138 11.0229 37.7752 11.04C36.3538 11.04 35.1578 11.5286 34.1872 12.5057C33.2338 13.4657 32.7572 14.6829 32.7572 16.1571C32.7572 16.9286 32.9825 17.58 33.4332 18.1114C33.9012 18.6257 34.5512 18.8829 35.3832 18.8829C36.2325 18.8829 36.9345 18.7114 37.4892 18.3686C36.2585 17.5457 35.6432 16.3543 35.6432 14.7943C35.6258 13.9714 35.9205 13.2257 36.5272 12.5571C37.1512 11.8714 37.9398 11.5286 38.8932 11.5286C39.8638 11.5114 40.5572 11.7686 40.9732 12.3C41.3892 12.8314 41.5972 13.5171 41.5972 14.3571C41.5972 15.18 41.3978 16.0543 40.9992 16.98H41.1552C41.9178 16.9629 42.5765 16.6971 43.1312 16.1829C43.3392 15.9771 43.5125 15.7971 43.6512 15.6429C43.8072 15.4886 43.9632 15.4114 44.1192 15.4114C44.3618 15.4114 44.4832 15.6943 44.4832 16.26C44.4832 17.3057 44.1712 18.0943 43.5472 18.6257C42.9232 19.14 42.2298 19.3971 41.4672 19.3971C40.7218 19.3971 40.0892 19.3457 39.5692 19.2429ZM39.3352 16.26C39.6298 15.6429 39.7772 15.0429 39.7772 14.46C39.7772 13.8771 39.5865 13.5857 39.2052 13.5857C39.0492 13.5857 38.9192 13.6971 38.8152 13.92C38.7112 14.1429 38.6592 14.3571 38.6592 14.5629C38.6592 15.2486 38.8845 15.8143 39.3352 16.26ZM49.0843 9.31714C48.391 10.9971 48.0443 12.5657 48.0443 14.0229C48.0443 15.4629 48.339 16.5257 48.9283 17.2114C49.535 17.8971 50.5056 18.24 51.8403 18.24C52.6376 18.24 53.3396 17.9571 53.9463 17.3914C54.137 15.9857 54.293 15.0514 54.4143 14.5886C54.709 13.4571 55.1596 12.8914 55.7663 12.8914C56.2516 12.8914 56.711 13.2257 57.1443 13.8943C57.5776 14.5457 57.7856 15.1029 57.7683 15.5657C57.7683 16.3371 57.4563 17.7686 56.8323 19.86C58.0456 18.9514 59.441 17.6057 61.0183 15.8229C61.2436 15.5657 61.4343 15.4371 61.5903 15.4371C61.833 15.4371 61.9543 15.72 61.9543 16.2857C61.9543 17.3829 61.3996 18.5571 60.2903 19.8086C59.181 21.0429 57.7076 22.0286 55.8703 22.7657C55.7316 23.0914 55.619 23.4 55.5323 23.6914C55.4456 23.9829 55.333 24.3343 55.1943 24.7457C55.0556 25.1571 54.813 25.6029 54.4663 26.0829C54.1196 26.58 53.6863 27 53.1663 27.3429C52.057 28.0971 50.783 28.4743 49.3443 28.4743C47.923 28.4743 46.727 28.1571 45.7563 27.5229C44.803 26.9057 44.3263 26.0486 44.3263 24.9514C44.3263 24.42 44.5863 23.9829 45.1063 23.64C45.6263 23.2971 46.3023 22.9971 47.1343 22.74C47.9663 22.5 48.9023 22.2857 49.9423 22.0971C50.9823 21.9086 52.0223 21.6943 53.0623 21.4543C53.201 21.06 53.305 20.6914 53.3743 20.3486C52.6983 20.8629 51.8663 21.12 50.8783 21.12C48.8156 21.12 47.195 20.7 46.0163 19.86C44.647 18.8829 43.9623 17.3571 43.9623 15.2829C43.9623 12.5743 44.6556 10.0029 46.0423 7.56857C45.6263 7.08857 45.2883 6.59143 45.0283 6.07714C44.7683 5.54571 44.6383 5.14286 44.6383 4.86857C44.6383 4.38857 44.8116 4.15714 45.1583 4.17429C45.3836 4.17429 45.6436 4.31143 45.9383 4.58571C46.233 4.86 46.467 5.09143 46.6403 5.28C46.831 5.46857 47.0303 5.64 47.2383 5.79429C48.1396 4.66286 49.197 3.74571 50.4103 3.04286C51.6236 2.34 52.9583 1.98857 54.4143 1.98857C55.8703 1.98857 57.0056 2.25429 57.8203 2.78571C58.635 3.31714 59.0423 4.24286 59.0423 5.56286C59.0423 6.88286 58.5223 7.98 57.4823 8.85429C56.4596 9.72857 55.0296 10.1657 53.1923 10.1657C51.927 10.1657 50.5576 9.88286 49.0843 9.31714ZM49.9423 7.56857C50.8956 7.98 52.0483 8.18571 53.4003 8.18571C54.2323 8.18571 54.8996 7.96286 55.4023 7.51714C55.905 7.07143 56.1563 6.59143 56.1563 6.07714C56.1563 5.54571 55.983 5.16 55.6363 4.92C55.307 4.66286 54.865 4.53429 54.3103 4.53429C52.6463 4.53429 51.1903 5.54571 49.9423 7.56857ZM49.0583 26.4943C50.237 26.4943 51.2683 25.62 52.1523 23.8714C51.199 24.1114 50.393 24.3 49.7343 24.4371C49.0756 24.5743 48.5383 24.6943 48.1223 24.7971C47.7236 24.9 47.429 25.0029 47.2383 25.1057C47.065 25.2086 46.9783 25.3543 46.9783 25.5429C46.9783 25.8686 47.195 26.1 47.6283 26.2371C48.079 26.3914 48.5556 26.4771 49.0583 26.4943ZM71.1551 19.2429C69.7857 20.8371 68.1391 21.6343 66.2151 21.6343C64.3084 21.6343 62.8784 21.1543 61.9251 20.1943C60.9717 19.2171 60.5037 18.0086 60.5211 16.5686C60.5037 14.5286 61.1537 12.7714 62.4711 11.2971C63.7884 9.82286 65.5131 9.08571 67.6451 9.08571C68.6157 9.08571 69.3957 9.20571 69.9851 9.44571C71.0077 9.85714 71.5191 10.2429 71.5191 10.6029C71.5191 10.8771 70.7997 11.0229 69.3611 11.04C67.9397 11.04 66.7437 11.5286 65.7731 12.5057C64.8197 13.4657 64.3431 14.6829 64.3431 16.1571C64.3431 16.9286 64.5684 17.58 65.0191 18.1114C65.4871 18.6257 66.1371 18.8829 66.9691 18.8829C67.8184 18.8829 68.5204 18.7114 69.0751 18.3686C67.8444 17.5457 67.2291 16.3543 67.2291 14.7943C67.2117 13.9714 67.5064 13.2257 68.1131 12.5571C68.7371 11.8714 69.5257 11.5286 70.4791 11.5286C71.4497 11.5114 72.1431 11.7686 72.5591 12.3C72.9751 12.8314 73.1831 13.5171 73.1831 14.3571C73.1831 15.18 72.9837 16.0543 72.5851 16.98H72.7411C73.5037 16.9629 74.1624 16.6971 74.7171 16.1829C74.9251 15.9771 75.0984 15.7971 75.2371 15.6429C75.3931 15.4886 75.5491 15.4114 75.7051 15.4114C75.9477 15.4114 76.0691 15.6943 76.0691 16.26C76.0691 17.3057 75.7571 18.0943 75.1331 18.6257C74.5091 19.14 73.8157 19.3971 73.0531 19.3971C72.3077 19.3971 71.6751 19.3457 71.1551 19.2429ZM70.9211 16.26C71.2157 15.6429 71.3631 15.0429 71.3631 14.46C71.3631 13.8771 71.1724 13.5857 70.7911 13.5857C70.6351 13.5857 70.5051 13.6971 70.4011 13.92C70.2971 14.1429 70.2451 14.3571 70.2451 14.5629C70.2451 15.2486 70.4704 15.8143 70.9211 16.26Z" fill="white" />
                    </svg>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategoriler
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Yemek</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Spor</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Eğitim</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Siyaset</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Bilim</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Oyun</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Yemek</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Spor</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Eğitim</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Siyaset</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Bilim</a></li>
                    <li><a class="dropdown-item" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/category.php">Oyun</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/populer.php">Popüler Blogerlar</a>
            </li>
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
            <li class="nav-item">
                <a class="nav-link" href="<?= $_ENV["URL_PREFIX"] ?>/pages/admin/home.php" target="_blank">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/profile.php">
                    <i class="fa-regular fa-circle-user"></i>
                    Profil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/auth/register.php">
                    <i class="fa-solid fa-plus"></i>
                    Kayıt Ol
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $_ENV["URL_PREFIX"]?>/pages/front/auth/login.php">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Giriş Yap
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-power-off"></i>
                    Çıkış Yap
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- Navigation Bar End -->
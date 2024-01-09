<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
?>

<?php
    $id = $_GET["id"];
    $a = $blog->getBlogsByCategory($id);
    
?>



<div class="container mt-5 d-flex flex-column align-items-center">
    <img class="w-100 my-4" src="<?= $_ENV["URL_PREFIX"] ?>/assets/img/svg/header.svg" alt="Blogo">
    <div class="row">
        <div class="col-6">
            <div class="position-relative">
                <img class="img-fluid" src="<?= $_ENV["URL_PREFIX"] ?>/assets/img/<?= $a[0]->image_url ?>" alt="<?= $a[0]->title ?>">
                <span class="position-absolute top-0 start-0 badge text-bg-warning ms-2 mt-2">Spor</span>
                <div class="position-absolute bottom-0 start-0 m-3">
                    <h3 class="fs-3 text-white"><?= $a[0]->title ?></h3>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex flex-column justify-content-between">
            <div class="card position-relative">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid" src="<?= $_ENV["URL_PREFIX"] ?>/assets/img/<?= $a[1]->image_url ?>" alt="<?= $a[1]->title ?>">
                        <span class="position-absolute top-0 start-0 badge text-bg-warning ms-2 mt-2">Spor</span>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $a[1]->title ?></h5>
                            <p class="card-text"><?= $a[1]->short_description ?></p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card position-relative">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid" src="<?= $_ENV["URL_PREFIX"] ?>/assets/img/<?= $a[2]->image_url ?>" alt="<?= $a[2]->title ?>">
                        <span class="position-absolute top-0 start-0 badge text-bg-warning ms-2 mt-2">Spor</span>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $a[2]->title ?></h5>
                            <p class="card-text"><?= $a[2]->short_description ?></p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr width="100%" class="my-5">
    <div class="row">
        <?php
            array_shift($a);
            array_shift($a);
            array_shift($a);
        ?>
        <?php foreach ($a as $item):?>
            <div class="col-3 my-4">
                <img class="img-fluid" src="<?= $_ENV["URL_PREFIX"] ?>/assets/img/<?= $item->image_url ?>" alt="<?= $item->title ?>">
                <h3 class="text-light fs-4 mt-3"><?= $item->title ?></h3>
                <p class="text-light fs-6"><?= $item->short_description ?> <a href="#" class="ms-1 link-secondary link-offset-2 link-underline-opacity-0 fw-light fst-italic">...daha fazla</a></p>
                <div class="d-flex column-gap-3 align-items-center">
                    <div>
                        <span class="badge bg-secondary disabled d-flex align-items-center column-gap-2">
                            <i class="fa-regular fa-clock"></i>
                            <p class="p-0 m-0">20:15</p>
                        </span>
                    </div>
                    <hr style="width: 2px; height: 25px;" class="bg-white p-0 m-0">
                    <a class="link-light link-offset-2 link-underline link-underline-opacity-0 fst-italic fw-light" href="#">Onur Aycicek</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include_once "views/_footer.php" ?>
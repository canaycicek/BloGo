<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
?>

<!-- Slider Start -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="height: 50vh;">
        <div class="carousel-item active">
            <img src="https://picsum.photos/800/600?random=12968" class="img-fluid sliderImg" alt="picture">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/800/600?random=12969" class="img-fluid sliderImg" alt="picture">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/800/600?random=12960" class="img-fluid sliderImg" alt="picture">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Slider End -->
<?php
$result = $blog->getBlogsByDate();
$sliceDate = explode(" ", $result[0]->dateAdded);
$sliceHour = explode(":", $sliceDate[1])
?>
<div class="container">
    <img class="my-3 w-100" src="<?= $_ENV["URL_PREFIX"] ?>/assets/img/svg/header.svg" alt="Blogo">

    <!-- Head Content Start -->
    <div class="row">
        <div class="col-6">
            <img class="img-fluid" src="<?= $_ENV["URL_PREFIX"] ?>/assets/img/<?= $result[0]->image_url ?>" alt="<?= $result[0]->title ?>">
        </div>
        <div class="col-6 d-flex flex-column justify-content-between">
            <div class="d-flex flex-column row-gap-4">
                <div class="d-flex column-gap-3 align-items-center">
                    <div>
                        <span class="badge bg-secondary disabled d-flex align-items-center column-gap-2">
                            <i class="fa-regular fa-clock"></i>
                            <p class="p-0 m-0"><?= $sliceHour[0] . ":" . $sliceHour[1]; ?></p>
                        </span>
                    </div>
                    <hr style="width: 2px; height: 30px;" class="bg-white p-0 m-0">
                    <a class="link-light link-offset-2 link-underline link-underline-opacity-0 fst-italic fw-light" href="#">Can Aycicek</a>
                </div>
                <h2 class="text-light fs-1">
                    <?= $result[0]->title ?>
                </h2>
                <p class="text-light mt-3 fs-5">
                    <?= $result[0]->short_description ?>
                </p>
            </div>
            <div>
                <button class="btn btn-primary">Daha fazla</button>
            </div>
        </div>

        <hr class="my-4">

        <!-- Body Content -->
        <div class="row">
            <?php array_shift($result) ?> <!-- array_shift => $result dizisinin ilk elemanını görme -->
            <?php foreach ($result as $item) : ?>
                <?php
                $sliceDates = explode(" ", $item->dateAdded);
                $sliceHours = explode(":", $sliceDates[1]);
                $time = $sliceHours[0] . ":" . $sliceHours[1];
                
                ?>
                <div class="col-3 my-4">

                    <img class="img-fluid w-100" src="<?= $_ENV["URL_PREFIX"] . "/assets/img/" . $item->image_url ?>" alt="<?= $item->title ?>">
                    <h3 class="text-light fs-4 mt-3"><?= $item->title ?></h3>
                    <p class="text-light fs-6"><?= $item->short_description ?>
                        <a href="#" class="ms-1 link-secondary link-offset-2 link-underline-opacity-0 fw-light fst-italic">
                            ...daha fazla
                        </a>
                    </p>
                    <div class="d-flex column-gap-3 align-items-center">
                        <div>
                            <span class="badge bg-secondary disabled d-flex align-items-center column-gap-2">
                                <i class="fa-regular fa-clock"></i>
                                <p class="p-0 m-0"><?= $time ?></p>
                            </span>
                        </div>
                        <hr style="width: 2px; height: 25px;" class="bg-white p-0 m-0">
                        <a class="link-light link-offset-2 link-underline link-underline-opacity-0 fst-italic fw-light" href="#">
                            Onur Aycicek
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Body Content End -->
    </div>
    <!-- Head Content End -->






</div>
<?php include_once "views/_footer.php" ?>
<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
?>

<?php
    $id = $_GET["id"];
    $result = $blog->getBlogById($id);

    $slice = explode(" ", $result->dateAdded);
    $fullHour = $slice[1];
    $sliceHour = explode(":", $fullHour);
    $hour = $sliceHour[0].":".$sliceHour[1];
    $date = $slice[0];

    $turkceAylar = [
        'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran',
        'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'
    ];
    $ayIndex = date('n', strtotime($date)) - 1;
    $newDate = date('Y', strtotime($date)) . ' ' . $turkceAylar[$ayIndex] . ' ' . date('j', strtotime($date));
?>

<div class="container my-3">
    <div class="row my-4">
        <div class="col-8">
            <h1>
                <?= $result->title ?>
            </h1>
            <p class="fst-italic fw-semibold">
                Can Ayçiçek
            </p>
            <p>
                <?= $newDate." | ".$hour ?>
            </p>
            <img class="img-fluid w-100" src="<?= $_ENV["URL_PREFIX"] . "/assets/img/" . $result->image_url ?>" alt="<?= $result->title ?>">
            <p>
                <?= htmlspecialchars_decode($result->description) ?>
            </p>
        </div>
        <div class="col-4">
            <h3>Aynı Kategoriden</h3>
            <?php $blogCount = ""; ?>
            <?php foreach ($blog->getBlogsByCategory($result->category_id) as $item): ?>
                <?php $blogCount++ ?>
                <div class="position-relative my-4">
                    <div class="row g-0 d-flex">
                        <div class="col-md-4">
                            <img class="img-fluid" style="width: 130px; height: 130px; object-fit: cover;" src="<?= $_ENV["URL_PREFIX"] . "/assets/img/" . $item->image_url ?>" alt="<?= $item->title ?>">
                            <div class="position-absolute top-0 start-0 text-bg-warning d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;"><?= $blogCount ?></div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a class="link-body-emphasis" href="detail.php?id=<?= $item->id ?>">
                                    <h5 class="card-title"><?= $item->title ?></h5>
                                </a>
                                <p class="card-text"><?= $item->short_description ?></p>
                                <p class="card-text">
                                    <small class="text-body-secondary"></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>



<?php include_once "views/_footer.php" ?>



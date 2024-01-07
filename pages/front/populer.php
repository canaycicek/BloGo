<?php
include_once "views/_header.php";
include_once "views/_navbar.php";
?>
<?= $user->checkUserStatus() ?>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-column justify-content-between row-gap-4 mt-4">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded" src="https://picsum.photos/700/700?random=12425213" alt="picture">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Can Aycicek</h2>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Numquam tenetur similique maxime atque voluptas asperiores facere commodi.
                                Debitis veniam, tempora voluptate placeat temporibus
                                ea pariatur consequuntur modi error iste ut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded" src="https://picsum.photos/700/700?random=12425674" alt="picture">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title">Onur Aycicek</h2>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                axime earum asperiores deserunt aspernatur non, nobis nam
                                icta neque a quis cum recusandae,
                                similique sunt. Porro necessitatibus omnis ab numquam magnam, blanditiis,
                                eveniet autem iste dignissimos quis dolorum quidem debitis quo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "views/_footer.php" ?>
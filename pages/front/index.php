<?php
    include "views/_header.php";
    include "views/_navbar.php";
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

    <svg class="my-3 w-100" width="1400" height="81" viewBox="0 0 1400 81" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M601.039 70.002C601.001 69.5767 600.981 69.1127 600.981 68.61C600.981 68.1073 600.981 67.5273 600.981 66.87C600.981 65.2073 601.02 63.2353 601.097 60.954C601.175 58.634 601.291 56.1787 601.445 53.588C601.6 50.9587 601.755 48.3293 601.909 45.7C602.064 43.032 602.219 40.48 602.373 38.044C602.567 35.608 602.741 33.4233 602.895 31.49C602.045 31.7607 601.291 32.012 600.633 32.244L599.125 22.5C603.495 21.2627 607.555 20.3347 611.305 19.716C615.095 19.0973 618.517 18.788 621.571 18.788C627.797 18.788 632.553 19.9673 635.839 22.326C639.126 24.6847 640.769 28.1067 640.769 32.592C640.769 35.144 640.209 37.29 639.087 39.03C637.966 40.7313 636.381 42.1427 634.331 43.264C639.358 45.816 641.871 49.9727 641.871 55.734C641.871 58.286 641.388 60.432 640.421 62.172C639.493 63.8733 638.295 65.246 636.825 66.29C635.356 67.334 633.79 68.1073 632.127 68.61C630.503 69.1513 628.957 69.4993 627.487 69.654C626.057 69.8473 624.935 69.944 624.123 69.944C622.113 69.944 619.967 69.7507 617.685 69.364C615.404 68.9773 613.181 68.3973 611.015 67.624C611.015 68.3973 611.015 69.132 611.015 69.828L601.039 70.002ZM621.803 28.474C620.411 28.474 618.942 28.5513 617.395 28.706C615.887 28.822 614.379 29.0153 612.871 29.286C612.639 32.1087 612.407 35.3953 612.175 39.146C612.678 39.1847 613.181 39.204 613.683 39.204C614.225 39.204 614.766 39.204 615.307 39.204C625.515 39.204 630.619 37.116 630.619 32.94C630.619 31.548 629.827 30.4653 628.241 29.692C626.695 28.88 624.549 28.474 621.803 28.474ZM616.641 48.368C615.829 48.368 614.998 48.368 614.147 48.368C613.335 48.368 612.504 48.3873 611.653 48.426C611.576 50.1273 611.499 51.8287 611.421 53.53C611.383 55.2313 611.325 56.9133 611.247 58.576C613.413 59.2333 615.539 59.7167 617.627 60.026C619.715 60.2967 621.513 60.432 623.021 60.432C626.231 60.432 628.531 60.0453 629.923 59.272C631.315 58.46 632.011 57.1453 632.011 55.328C632.011 53.0853 630.677 51.3647 628.009 50.166C625.38 48.9673 621.591 48.368 616.641 48.368ZM658.46 70.582C656.333 70.582 654.574 70.118 653.182 69.19C651.828 68.3007 650.746 67.0633 649.934 65.478C649.16 63.8927 648.58 62.0753 648.194 60.026C647.846 57.9767 647.614 55.792 647.498 53.472C647.42 51.1133 647.382 48.7547 647.382 46.396C647.382 44.3467 647.44 42.104 647.556 39.668C647.672 37.1933 647.807 34.6993 647.962 32.186C648.155 29.634 648.348 27.2367 648.542 24.994C648.774 22.7513 648.986 20.7987 649.18 19.136L659.678 19.252C659.368 21.224 659.078 23.4667 658.808 25.98C658.537 28.4547 658.305 30.968 658.112 33.52C657.957 36.072 657.822 38.4307 657.706 40.596C657.628 42.7613 657.59 44.482 657.59 45.758C657.59 49.2767 657.648 52.0413 657.764 54.052C657.918 56.0627 658.131 57.4933 658.402 58.344C658.711 59.156 659.117 59.562 659.62 59.562C660.277 59.562 660.992 59.156 661.766 58.344C662.539 57.4933 663.293 56.546 664.028 55.502L668.958 65.304C667.759 66.6187 666.328 67.8173 664.666 68.9C663.003 70.0213 660.934 70.582 658.46 70.582ZM691.167 70.756C688.074 70.756 685.367 70.2533 683.047 69.248C680.766 68.2427 678.871 66.87 677.363 65.13C675.855 63.3513 674.734 61.3213 673.999 59.04C673.264 56.7587 672.897 54.3613 672.897 51.848C672.897 49.296 673.342 46.9373 674.231 44.772C675.159 42.568 676.416 40.654 678.001 39.03C679.625 37.406 681.52 36.1493 683.685 35.26C685.85 34.332 688.209 33.868 690.761 33.868C693.429 33.868 695.904 34.332 698.185 35.26C700.466 36.188 702.458 37.4833 704.159 39.146C705.86 40.8087 707.175 42.7613 708.103 45.004C709.07 47.2467 709.553 49.6827 709.553 52.312C709.553 58.1507 707.948 62.694 704.739 65.942C701.53 69.1513 697.006 70.756 691.167 70.756ZM691.109 61.36C693.932 61.36 696.078 60.5673 697.547 58.982C699.055 57.3967 699.809 55.1153 699.809 52.138C699.809 49.47 698.997 47.324 697.373 45.7C695.749 44.076 693.622 43.264 690.993 43.264C689.408 43.264 687.958 43.6893 686.643 44.54C685.328 45.352 684.265 46.454 683.453 47.846C682.68 49.1993 682.293 50.7073 682.293 52.37C682.293 53.8393 682.583 55.27 683.163 56.662C683.782 58.054 684.748 59.1947 686.063 60.084C687.378 60.9347 689.06 61.36 691.109 61.36ZM735.153 68.726C731.132 68.726 727.748 68.0107 725.003 66.58C722.258 65.188 720.054 63.332 718.391 61.012C716.767 58.692 715.588 56.1593 714.853 53.414C714.118 50.6687 713.751 47.9427 713.751 45.236C713.751 42.0267 714.273 38.856 715.317 35.724C716.361 32.592 717.927 29.75 720.015 27.198C722.142 24.646 724.771 22.5967 727.903 21.05C731.074 19.5033 734.766 18.73 738.981 18.73C742.538 18.73 745.651 19.252 748.319 20.296C750.987 21.3013 753.268 22.5387 755.163 24.008C757.096 25.4387 758.643 26.792 759.803 28.068L752.553 35.898C751.47 34.622 750.31 33.4233 749.073 32.302C747.874 31.1807 746.444 30.272 744.781 29.576C743.118 28.88 741.069 28.532 738.633 28.532C736.004 28.532 733.742 29.0153 731.847 29.982C729.952 30.91 728.406 32.1667 727.207 33.752C726.008 35.3373 725.119 37.116 724.539 39.088C723.998 41.06 723.727 43.09 723.727 45.178C723.727 47.6527 724.133 49.934 724.945 52.022C725.796 54.11 727.052 55.792 728.715 57.068C730.416 58.344 732.524 58.982 735.037 58.982C738.13 58.982 740.682 58.2667 742.693 56.836C744.704 55.4053 746.096 53.356 746.869 50.688C745.206 50.804 743.602 50.9587 742.055 51.152C740.547 51.3067 739.194 51.4807 737.995 51.674L737.009 42.278C739.29 41.7753 741.92 41.408 744.897 41.176C747.913 40.9053 750.794 40.77 753.539 40.77C757.328 40.77 760.17 41.002 762.065 41.466L761.833 50.978C761.021 50.746 759.726 50.572 757.947 50.456C757.947 51.3067 757.947 52.196 757.947 53.124C757.986 54.052 758.005 54.9993 758.005 55.966C758.005 58.634 757.966 61.2633 757.889 63.854C757.812 66.4447 757.734 68.5133 757.657 70.06L747.739 69.828C747.778 69.3253 747.836 68.552 747.913 67.508C748.029 66.464 748.145 65.2847 748.261 63.97C746.946 65.362 745.226 66.5027 743.099 67.392C741.011 68.2813 738.362 68.726 735.153 68.726ZM784.624 70.756C781.531 70.756 778.824 70.2533 776.504 69.248C774.223 68.2427 772.328 66.87 770.82 65.13C769.312 63.3513 768.191 61.3213 767.456 59.04C766.721 56.7587 766.354 54.3613 766.354 51.848C766.354 49.296 766.799 46.9373 767.688 44.772C768.616 42.568 769.873 40.654 771.458 39.03C773.082 37.406 774.977 36.1493 777.142 35.26C779.307 34.332 781.666 33.868 784.218 33.868C786.886 33.868 789.361 34.332 791.642 35.26C793.923 36.188 795.915 37.4833 797.616 39.146C799.317 40.8087 800.632 42.7613 801.56 45.004C802.527 47.2467 803.01 49.6827 803.01 52.312C803.01 58.1507 801.405 62.694 798.196 65.942C794.987 69.1513 790.463 70.756 784.624 70.756ZM784.566 61.36C787.389 61.36 789.535 60.5673 791.004 58.982C792.512 57.3967 793.266 55.1153 793.266 52.138C793.266 49.47 792.454 47.324 790.83 45.7C789.206 44.076 787.079 43.264 784.45 43.264C782.865 43.264 781.415 43.6893 780.1 44.54C778.785 45.352 777.722 46.454 776.91 47.846C776.137 49.1993 775.75 50.7073 775.75 52.37C775.75 53.8393 776.04 55.27 776.62 56.662C777.239 58.054 778.205 59.1947 779.52 60.084C780.835 60.9347 782.517 61.36 784.566 61.36Z" fill="white" />
        <path d="M819.529 52.4118H1186.41" stroke="white" stroke-width="2" />
        <path d="M1215 51.4118H1372.24" stroke="white" stroke-width="2" />
        <path d="M1399.82 52.4118C1399.82 59.7539 1393.87 65.7059 1386.53 65.7059C1379.19 65.7059 1373.24 59.7539 1373.24 52.4118C1373.24 45.0696 1379.19 39.1176 1386.53 39.1176C1393.87 39.1176 1399.82 45.0696 1399.82 52.4118Z" stroke="white" stroke-width="2" />
        <circle cx="1200.71" cy="52.4118" r="13.2941" stroke="white" stroke-width="2" />
        <path d="M581.294 52.4118L202.5 52.4118M178.676 52.4118L28.5882 52.4118" stroke="white" stroke-width="2" />
        <circle cx="14.2941" cy="52.4118" r="13.2941" stroke="white" stroke-width="2" />
        <circle cx="190.5" cy="52.5" r="11.5" stroke="white" stroke-width="2" />
    </svg>

    <div class="container">
        <div class="container">

            <!-- Head Content Start -->
            <div class="row mt-4">
                <div class="col-6">
                    <img class="img-fluid" src="https://picsum.photos/800/600" alt="picture">
                </div>
                <div class="col-6 d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column row-gap-4">
                        <div class="d-flex column-gap-3 align-items-center">
                            <div>
                                <span class="badge bg-secondary disabled d-flex align-items-center column-gap-2">
                                    <i class="fa-regular fa-clock"></i>
                                    <p class="p-0 m-0">22:30</p>
                                </span>
                            </div>
                            <hr style="width: 2px; height: 30px;" class="bg-white p-0 m-0">
                            <a class="link-light link-offset-2 link-underline link-underline-opacity-0 fst-italic fw-light" href="#">Can Aycicek</a>
                        </div>
                        <h2 class="text-light fs-1">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, fugit!
                        </h2>
                        <p class="text-light mt-3 fs-5">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem hic atque quo, numquam animi blanditiis dolore a voluptas magni eos reprehenderit vero. Tempora dolorem, deleniti doloribus nisi vel quae voluptas...
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-primary">Daha fazla</button>
                    </div>
                </div>
            </div>
            <!-- Head Content End -->

            <hr class="my-4">

            <!-- Body Content -->
            <h2 class="text-light my-4 text-center">Son Yüklenenler</h2>
            <div class="row">
                <div class="col-3 my-4">
                    <img class="img-fluid" src="https://picsum.photos/800/600?random=12964" alt="picture">
                    <h3 class="text-light fs-4 mt-3">Lorem ipsum dolor sit amet.</h3>
                    <p class="text-light fs-6">Lorem ipsum dolor sit amet consectetur adipisicing <a href="#" class="ms-1 link-secondary link-offset-2 link-underline-opacity-0 fw-light fst-italic">...daha fazla</a></p>
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
                <div class="col-3 my-4">
                    <img class="img-fluid" src="https://picsum.photos/800/600?random=12965" alt="picture">
                    <h3 class="text-light fs-4 mt-3">Lorem ipsum dolor sit amet.</h3>
                    <p class="text-light fs-6">Lorem ipsum dolor sit amet consectetur adipisicing <a href="#" class="ms-1 link-secondary link-offset-2 link-underline-opacity-0 fw-light fst-italic">...daha fazla</a></p>
                    <div class="d-flex column-gap-3 align-items-center">
                        <div>
                            <span class="badge bg-secondary disabled d-flex align-items-center column-gap-2">
                                <i class="fa-regular fa-clock"></i>
                                <p class="p-0 m-0">20:15</p>
                            </span>
                        </div>
                        <hr style="width: 2px; height: 25px;" class="bg-white p-0 m-0">
                        <a class="link-light link-offset-2 link-underline link-underline-opacity-0 fst-italic fw-light" href="#">Ahmet Yeşil</a>
                    </div>
                </div>
                <div class="col-3 my-4">
                    <img class="img-fluid" src="https://picsum.photos/800/600?random=12966" alt="picture">
                    <h3 class="text-light fs-4 mt-3">Lorem ipsum dolor sit amet.</h3>
                    <p class="text-light fs-6">Lorem ipsum dolor sit amet consectetur adipisicing <a href="#" class="ms-1 link-secondary link-offset-2 link-underline-opacity-0 fw-light fst-italic">...daha fazla</a></p>
                    <div class="d-flex column-gap-3 align-items-center">
                        <div>
                            <span class="badge bg-secondary disabled d-flex align-items-center column-gap-2">
                                <i class="fa-regular fa-clock"></i>
                                <p class="p-0 m-0">20:15</p>
                            </span>
                        </div>
                        <hr style="width: 2px; height: 25px;" class="bg-white p-0 m-0">
                        <a class="link-light link-offset-2 link-underline link-underline-opacity-0 fst-italic fw-light" href="#">Tufan Öztürk</a>
                    </div>
                </div>
                <div class="col-3 my-4">
                    <img class="img-fluid" src="https://picsum.photos/800/600?random=12967" alt="picture">
                    <h3 class="text-light fs-4 mt-3">Lorem ipsum dolor sit amet.</h3>
                    <p class="text-light fs-6">Lorem ipsum dolor sit amet consectetur adipisicing <a href="#" class="ms-1 link-secondary link-offset-2 link-underline-opacity-0 fw-light fst-italic">...daha fazla</a></p>
                    <div class="d-flex column-gap-3 align-items-center">
                        <div>
                            <span class="badge bg-secondary disabled d-flex align-items-center column-gap-2">
                                <i class="fa-regular fa-clock"></i>
                                <p class="p-0 m-0">20:15</p>
                            </span>
                        </div>
                        <hr style="width: 2px; height: 25px;" class="bg-white p-0 m-0">
                        <a class="link-light link-offset-2 link-underline link-underline-opacity-0 fst-italic fw-light" href="#">Melis Kuş</a>
                    </div>
                </div>
                <div class="col-3 my-4">
                    <img class="img-fluid" src="https://picsum.photos/800/600?random=12987" alt="picture">
                    <h3 class="text-light fs-4 mt-3">Lorem ipsum dolor sit amet.</h3>
                    <p class="text-light fs-6">Lorem ipsum dolor sit amet consectetur adipisicing <a href="#" class="ms-1 link-secondary link-offset-2 link-underline-opacity-0 fw-light fst-italic">...daha fazla</a></p>
                    <div class="d-flex column-gap-3 align-items-center">
                        <div>
                            <span class="badge bg-secondary disabled d-flex align-items-center column-gap-2">
                                <i class="fa-regular fa-clock"></i>
                                <p class="p-0 m-0">20:15</p>
                            </span>
                        </div>
                        <hr style="width: 2px; height: 25px;" class="bg-white p-0 m-0">
                        <a class="link-light link-offset-2 link-underline link-underline-opacity-0 fst-italic fw-light" href="#">Melis Kuş</a>
                    </div>
                </div>
                <div class="col-3 my-4">
                    <img class="img-fluid" src="https://picsum.photos/800/600?random=12989" alt="picture">
                    <h3 class="text-light fs-4 mt-3">Lorem ipsum dolor sit amet.</h3>
                    <p class="text-light fs-6">Lorem ipsum dolor sit amet consectetur adipisicing <a href="#" class="ms-1 link-secondary link-offset-2 link-underline-opacity-0 fw-light fst-italic">...daha fazla</a></p>
                    <div class="d-flex column-gap-3 align-items-center">
                        <div>
                            <span class="badge bg-secondary disabled d-flex align-items-center column-gap-2">
                                <i class="fa-regular fa-clock"></i>
                                <p class="p-0 m-0">20:15</p>
                            </span>
                        </div>
                        <hr style="width: 2px; height: 25px;" class="bg-white p-0 m-0">
                        <a class="link-light link-offset-2 link-underline link-underline-opacity-0 fst-italic fw-light" href="#">Melis Kuş</a>
                    </div>
                </div>
            </div>
            <!-- Body Content End -->

        </div>
    </div>

<?php include "views/_footer.php" ?>
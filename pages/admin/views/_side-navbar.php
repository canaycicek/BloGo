<div class="d-flex">
    <div class="sideNav bg-black">
        <nav>
            <div class="d-flex flex-column ps-2" style="height: 100vh;">
                <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="home.php">
                    Home
                </a>
                <?php if($user->isAdmin()): ?>
                    <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="blog-control.php">
                        Blog Kontrol
                    </a>
                    <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="category-control.php">
                        Kategori Kontrol
                    </a>
                    <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="users.php">
                        Kullanıcılar
                    </a>
                    <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="create-category.php">
                        Kategori Ekleme
                    </a>
                <?php endif; ?>
                <a class="link-underline link-underline-opacity-0 link-light py-3" style="width: 13vw;" href="create-blog.php">
                    Blog Ekleme
                </a>
            </div>
        </nav>
    </div>
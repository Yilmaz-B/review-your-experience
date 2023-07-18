<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
    <?php
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" >
        <ol class="breadcrumb">
            <li class="breadcrumb-item ms-5"><a href="/home" class="text-decoration-none bread">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories" class="text-decoration-none bread">Categories</a></li>
        </ol>
    </nav>
    <div class="row gy-3 ms-4 me-4">
        <?php global $categories ?>
        <?php foreach ($categories as $category): ?>
            <div class="col-sm-4 col-md-3 d-flex align-items-stretch">
                <div class="card p-0 mb-4">
                    <div class="card-body text-center p-0 text-decoration-none">
                        <a href="/cars/<?= $category->id ?>" class="text-decoration-none">
                            <img class="card-img-top h-75" src='/img/<?= $category->picture ?>'/>
                        <div class="card-title pb-3 pt-4"><?= $category->name ?></div>
                        </a>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</body>
</html>


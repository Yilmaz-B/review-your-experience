<!DOCTYPE html>
<html>
<?php
global $catagory_id;
$cars = getCars($catagory_id);
include_once('../Templates/member/defaults/head.php');
?>
<body>
<?php
include_once('../Templates/member/defaults/menu.php');
include_once('../Templates/member/defaults/pictures.php');
    ?>
<div class="container-fluid p-0">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" >
        <ol class="breadcrumb">
            <li class="breadcrumb-item ms-5"><a href="/home" class="text-decoration-none bread">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories" class="text-decoration-none bread">Categories</a></li>
            <li class="breadcrumb-item"><a href="/cars" class="text-decoration-none bread">Auto's</a></li>
        </ol>
    </nav>
    <div class="row gy-3 ms-4 me-4">
        <?php foreach ($cars as $car): ?>
            <div class="col-sm-4 col-md-3 d-flex align-items-stretch">
                <div class="card p-0 mb-4 pb-4">
                    <div class="card-body text-center p-0 text-decoration-none">
                        <a href="/member/product/<?= $car->id ?>" class="text-decoration-none">
                            <img class="card-img-top h-75" src='/img/<?= $car->picture ?>'/>
                            <div class="card-title pb-3 pt-4"><?= $car->model ?></div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
    <hr>
    <?php
    include_once('../Templates/member/defaults/footer.php');
    ?>
</body>
</html>
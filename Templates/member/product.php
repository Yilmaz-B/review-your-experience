<!DOCTYPE html>
<html>
<?php
include_once('../Templates/member/defaults/head.php');
?>
<body>
<?php
include_once('../Templates/member/defaults/menu.php');
include_once('../Templates/member/defaults/pictures.php');
global $car;
global $reviews;
global $getReview;
?>
<div class="container-fluid">
<?php if(!empty($message)): ?>
    <div class="alert alert-success" role="alert">
        <?=$message?>
        <?php endif;?>
    </div>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" >
        <ol class="breadcrumb">
            <li class="breadcrumb-item ms-5"><a href="/home" class="text-decoration-none bread">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories" class="text-decoration-none bread">Categories</a></li>
            <li class="breadcrumb-item"><a href="/cars" class="text-decoration-none bread">Auto's</a></li>
            <li class='breadcrumb-item'><a href='/product' class="text-decoration-none bread">Detail</a></li>
        </ol>
    </nav>
        <?php
            echo "<img class='card-img-top w-50'  src='/img/".$car["picture"] ."'/>";
            echo "<br>";
            echo "<div class='ms-5'>" . $car['description'] . "</div><br><br>";
        ?>
    <div class="container-sm">
        <div class="row">
            <div class="col-12">
            <?php foreach ($reviews as $review):?>
                <div class="card">
                    <div class="card-header">
                        <?=$review->user_id?> (<?php $date=date_create($review->date);
                        echo date_format($date,'d-m-Y')?>)
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p><?=$review->description?></p>
                            <p>Sterren: <?=$review->stars?></p>
                        </blockquote>
                    </div>
                </div>
            <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
</div>
<hr>
<?php
include_once('../Templates/member/defaults/footer.php');
?>
</body>
</html>

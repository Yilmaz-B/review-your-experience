<?php
function getReviews($id):array
{
    global $pdo;
    $reviews = $pdo->prepare('SELECT * FROM `review` WHERE `product_id` = :id order by description DESC');
    $reviews->bindParam("id",$id);
    $reviews->execute();
    $review=$reviews->fetchAll(PDO::FETCH_CLASS, 'Review');
    return $review;
}

//function getReview(int $productId):array{
//     global $pdo;
//     $query=$pdo->prepare("Select * FROM review WHERE product_id=:id order by description DESC ");
//     $query->bindParam("id",  $productId);
//     $query->execute();
//     $userName = $query->fetchAll(PDO::FETCH_CLASS,  'Review');
//     return $userName;
//}
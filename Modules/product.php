<?php
function getProduct(int $productId):Car{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM car WHERE id=?');
    $sth->bindParam(1,$productId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS,'Car')[0];
}
?>
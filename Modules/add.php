<?php
function getAllproducts():array {
    global $pdo;
    $sth = $pdo-> prepare('SELECT * FROM car ORDER BY category_id');
    $sth->execute();
    $products = $sth->fetchAll(PDO::FETCH_CLASS, 'Car');
    return $products;
}
?>
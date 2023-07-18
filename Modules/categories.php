<?php
function getCategories():array
{
    global $pdo;
    $categories = $pdo->query('SELECT * FROM `category`')->fetchAll(PDO::FETCH_CLASS, 'Category');
    return $categories;
}

function getCategoryName(int $id):string
{
    global  $pdo;
    $sth = $pdo ->prepare('SELECT * FROM category WHERE id= ? ');
    $sth->bindParam(1,$id,PDO::PARAM_INT);
    $sth->setFetchMode(PDO::FETCH_CLASS,Category::class);
    $sth->execute();
    $category =$sth->fetch();
    return $category->name;
}

function getCars(int $id):array
{
    global $categories;
    global $pdo;
    $car = $pdo->prepare('SELECT * FROM `car` WHERE category_id = :id');
    $car->bindParam('id', $id);
    $car->execute();
    $cars = $car->fetchAll(PDO::FETCH_CLASS, 'Car');

    return $cars;
}

function getCarsName(int $id):string
{
    global $categories;
    global $pdo;
    $car = $pdo->prepare('SELECT * FROM `car` WHERE category_id = :id');
    $car->bindParam('id', $id);
    $car->execute();
    $cars = $car->fetchAll(PDO::FETCH_CLASS, 'Car');

    return $cars;
}
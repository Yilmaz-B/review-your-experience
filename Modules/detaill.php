<?php

function getDetail():array
{
    global $pdo,$params;

    $query = $pdo->prepare('SELECT * FROM `car` WHERE id=:id');
    $query->bindParam('id',$params[2]);
    $query->execute();
    return $car=$query->fetch(PDO::FETCH_ASSOC);
}

function getDetailPlus():array
{
    global $pdo,$params;

    $query = $pdo->prepare('SELECT * FROM `car` WHERE id=:id');
    $query->bindParam('id',$params[3]);
    $query->execute();
    return $car=$query->fetch(PDO::FETCH_ASSOC);
}

function getdetailName(int $id):string
{

}

function getDetails(int $id):array
{
    global $pdo;
    $car = $pdo->prepare('SELECT * FROM `car` WHERE category_id = :id');
    $car->bindParam('id', $id);
    $car->execute();
    return $cars = $car->fetchAll(PDO::FETCH_CLASS, 'Product');
}

function getdetailsName(int $id):string
{

}
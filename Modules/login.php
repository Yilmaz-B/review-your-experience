<?php

function checkLogin():string
{
    global $pdo;
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, "password");
    if($email !== false && !empty($password)){
        $db = "SELECT * FROM `user` WHERE `email` = :email AND `password` = :password";
        $query = $pdo->prepare($db);
        $query->bindParam("email", $email);
        $query->bindParam("password", $password);
        $query->setFetchMode(PDO::FETCH_CLASS, 'User');
        $query->execute();
        $user = $query->fetch();

        if($user !== false){
            $_SESSION['user'] = $user;
            if($_SESSION['user']->role=="admin"){
                return "ADMIN";
            } else{
                return "MEMBER";
            }
        }
        return "FAILURE";
    }
    return "INCOMPLETE";
}

function isAdmin():bool
{
    //controleer of er ingelogd is en de user de rol admin heeft
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user->role == "admin")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

function isMember():bool
{
    //controleer of er ingelogd is en de user de rol admin heeft
    if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
    {
        $user=$_SESSION['user'];
        if ($user->role === "member")
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    return false;
}

function makeRegistration():string
{
    global $pdo;
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');
    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
    if($email !== false && !empty($password) && !empty($firstName) && !empty($lastName)){
        $db = "SELECT * FROM `user` WHERE `email` = :email";
        $query = $pdo->prepare($db);
        $query->bindParam(':email', $email);
        $query->setFetchMode(PDO::FETCH_CLASS, 'User');
        $query->execute();
        $user = $query->fetch();
        if($user !== false) {
            return "EXIST";
        } else {
            $_SESSION['user'] = $user;
            $query = $pdo->prepare("INSERT INTO `user`(`email`, `password`, `first_name`, `last_name`, `role`) VALUES(:email, :password, :first_name, :last_name, 'member')");
            $query->bindParam('email', $email);
            $query->bindParam('password', $password);
            $query->bindParam('first_name', $firstName);
            $query->bindParam('last_name', $lastName);
            $query->execute();
            return "SUCCES";
        }
    }
    return "INCOMPLETE";
}

function getName(){
    return $_SESSION['user']->first_name . " " . $_SESSION['user']->last_name;
}

function checkRole(){
    if(isMember() === true){
        return "MEMBER";
    } elseif (isAdmin() === true){
        return "ADMIN";
    } else{
        return false;
    }
}
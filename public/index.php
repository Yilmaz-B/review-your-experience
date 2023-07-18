<?php
require '../Modules/categories.php';
require '../Modules/login.php';
require '../Modules/logout.php';
require '../Modules/database.php';
require '../Modules/common.php';
require '../Modules/profile.php';
require '../Modules/add.php';
require '../Modules/addproduct.php';
require '../Modules/delete.php';
require '../Modules/product.php';
require '../Modules/review.php';
require '../Modules/detaill.php';

session_start();
//var_dump($_SESSION);
//var_dump($_POST);
$message="";

$request = $_SERVER['REQUEST_URI'];

$params = explode("/", $request);
//print_r($request);
$title = "HealthOne";
$titleSuffix = "";

//$params[1] is de action
//$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
switch ($params[1]) {

    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        $result = checkRole();
        switch($result){
            case "ADMIN":
                header('location: /admin/categories');
                break;
            case "MEMBER":
                header('location: /member/categories');
                break;
            default:
                include_once "../Templates/categories.php";
                break;
        }
        break;

    case 'cars':
        $titleSuffix = ' | Auto\'s';
        $catagory_id = $params[2];
        $result = checkRole();
        switch($result){
            case "ADMIN":
                header('location: /admin/cars');
                break;
            case "MEMBER":
                header('location: /member/cars');
                break;
            default:
                include_once "../Templates/cars.php";
                break;
        }
        break;

    case 'product':
        if(isset($params[2])) {
            $productId = $params[2];
            $product= getProduct($productId);
            $reviews=getReviews($productId);
        }
        $car=getDetail();
        $result = checkRole();
        $catagory_id = $params[2];
        switch($result){
            case "ADMIN":
                header('location: /admin/product');
                break;
            case "MEMBER":
                header('location: /member/product');
                break;
            default:
                include_once "../Templates/product.php";
                break;
        }
        break;

    case 'products':
//        if(isset($params[2])) {
//            $productId = $params[2];
//            $product= getProduct($productId);
//            //var_dump($product);
//            $reviews=getReviews($productId);
//            echo "<pre>";var_dump($reviews);echo "</pre>";
//        }
        $result = checkRole();
        switch($result){
            case "ADMIN":
                header('location: /admin/products');
                break;
            case "MEMBER":
                header('location: /member/products');
                break;
            default:
                include_once "../Templates/admin/product.php";
                break;
        }
        break;

    case 'login':
        $titleSuffix = ' | Login';
        if(isset($_POST['login'])){
            $result = checkLogin();
            switch ($result){
                case "ADMIN":
                    header('location: /admin/home');
                    break;
                case "MEMBER":
                    header('location: /member/home');
                    break;
                case "FAILURE":
                    $message = "Email of wachtwoord zijn incorrect";
                    include_once "../Templates/login.php";
                    break;
                case "INCOMPLETE":
                    $message = "Niet alle velden zijn ingevuld";
                    include_once "../Templates/login.php";
                    break;
            }
        } else{
            include_once "../Templates/login.php";
        }
        break;

    case 'logout':
        $titleSuffix = ' | Logout';
        logout();
        include_once "../Templates/home.php";
        break;

    case 'register':
        $titleSuffix = ' | Register';
        if(isset($_POST['register'])){
            $results = makeRegistration();
            switch ($results){
                case 'SUCCES':
                    header('location: /home');
                    break;
                case 'INCOMPLETE':
                    $message = "Niet alle velden zijn correct ingevuld";
                    include_once "../Templates/register.php";
                    break;
                case 'EXIST':
                    $message = "Gebruiker bestaat al";
                    include_once "../Templates/register.php";
                    break;
            }
        } else {
            include_once "../Templates/register.php";
        }
        break;

    case 'contact':
        $titleSuffix = ' | Contact';
        $result = checkRole();
        switch($result){
            case "ADMIN":
                header('location: /admin/contact');
                break;
            case "MEMBER":
                header('location: /member/contact');
                break;
            default:
                include_once "../Templates/contact.php";
                break;
        }
        break;

    case 'profile':
        $titleSuffix = ' | Profiel';
        $result = checkRole();
        switch($result){
            case "ADMIN":
                header('location: /admin/profile');
                break;
            case "MEMBER":
                header('location: /member/profile');
                break;
            default:
            include_once "../Templates/login.php";
            break;
        }
        break;

    case 'home':
        $titleSuffix = ' | Home';
            $result = checkRole();
            switch ($result){
                case "ADMIN":
                    header('location: /admin/home');
                    break;
                case "MEMBER":
                    header('location: /member/home');
                    break;
                default:
                    include_once "../Templates/home.php";
                    break;
            }
        break;

    case 'admin':
        include_once ('admin.php');
        break;

    case 'member':
        include_once ('member.php');
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}








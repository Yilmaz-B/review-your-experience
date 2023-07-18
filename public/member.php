<?php
global $params;
//$params[2] is de action en $params[3] een getal die de action nodig heeft
//check if user has role admin
if (!isMember()) {
    logout();
    header ("location:/home");
} else {

    switch ($params[2]) {

        case 'home':
            $name = getName();
            include_once "../Templates/member/home.php";
            break;

        case 'categories':
            $titleSuffix = ' | Categories';
            $categories = getCategories();
            include_once '../Templates/member/categories.php';
            break;

        case 'cars':
            $titleSuffix = ' | Auto\'s';
            $catagory_id = $params[3];
            include_once '../Templates/member/cars.php';
            break;

        case 'product':
            if(isset($params[3])) {
                $productId = $params[3];
                $product= getProduct($productId);
                $reviews=getReviews($productId);
            }
            $car=getDetailPlus();
            $catagory_id = $params[3];
            include_once '../Templates/member/product.php';
            break;

        case 'products':

            break;
        case 'profile':
            $getProfile = getProfile();
            if(isset($_POST['sendProfile'])){
                header('location: editprofile');
            } elseif(isset($_POST['sendPassword'])){
                header('location: changepassword');
            }
            include_once "../Templates/member/profile.php";
            break;

        case 'editprofile':
            $titleSuffix = ' | Profile';
            if(isset($_POST['profile'])){
                $result = changeProfile();
                if($result === true){
                    header("location: /member/profile");
                } else{
                    $message="Niet alle velden zijn correct ingevuld";
                    include_once "../Templates/member/editprofile.php";
                }
            } else{
                include_once "../Templates/member/editprofile.php";
            }
            break;
        case 'changepassword':
            $titleSuffix = ' | Profile Password Change';
            if(isset($_POST['savePass'])){
                $result = changePassword();
                if($result === true){
                    header("location: /member/profile");
                } else{
                    $msg = "Er is iets fout gegaan!";
                    include_once "../Templates/member/changepassword.php";
                }
            } else {
                include_once "../Templates/member/changepassword.php";
            }
            break;

        case 'review':

            break;

        case 'contact':
            include_once '../Templates/member/contact.php';
        break;

        default:
            include_once "../Templates/member/home.php";
            break;
    }
}
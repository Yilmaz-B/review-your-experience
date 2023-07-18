<?php
global $params;

//check if user has role admin
if (!isAdmin()) {
    logout();
    header ("location: /home");
} else {
/* $params[2] is de action
   $params[3] is een getal die de delete action nodig heeft
*/
    switch ($params[2]) {

        case 'home':
            $name = getName();
            include_once "../Templates/admin/home.php";
            break;

        case 'products':
            $products = getAllproducts();
            include_once "../Templates/admin/product.php";
            break;

        case 'add':
            if (isPost()) {
                if (fileupload()){
                    global $message;
                    saveProduct($_POST['name'], $_POST['category'], $_POST['description'], "");
                    header("Location: /admin/products");
                include_once '../Templates/admin/product.php';
                } else {
                    $categories = getCategories();
                    header("Location: /admin/add");
                }
            }else{
                $categories = getCategories();
                include_once "../Templates/admin/add.php";
            }
            break;

        case 'delete':
            echo "delete";
            getDelete($params[3]);
            include_once '../Templates/admin/products.php';
            break;

        case 'contact':
            include_once '../Templates/admin/contact.php';
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

        default:
            include_once "../Templates/admin/home.php";
            break;
    }
}
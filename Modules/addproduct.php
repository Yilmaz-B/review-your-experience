<?php
function isPost()
{
    if(
        (isset($_POST ['name'])) && (!empty($_POST['name'])) &&
        (isset($_POST ['category'])) && (!empty($_POST['category'])) &&
        (isset($_POST ['description'])) && (!empty($_POST['description'])) &&
        (isset($_FILES['fileToUpload']['tmp_name'])) &&
        (!empty($_FILES['fileToUpload']['tmp_name']))
    )
     {
         return true;
     }else {
        return false;
    }
}

function fileupload()
{
    global $message;

    $allowed=['gif','png','jpg'];
    $filename=$_FILES['fileToUpload']['name'];
    $ext=pathinfo($filename,PATHINFO_EXTENSION);
    if (!in_array($ext,$allowed) ||
    exif_imagetype($_FILES['fileToUpload']['tmp_name']) === false){
        $message="Sorry alleen gif,png of jpg file toegestaan";
        return false;
    }
    $target_dir = "img/cars/".
        strtolower(getCategoryName((int) $_POST['category'])) . "/";
    $target_file = $_FILES["fileToUpload"]["name"];
    do{
        $target_file=$target_dir.md5($target_file).".$ext";
    }while(file_exists($target_file));

    if($_FILES["fileToUpload"]["size"] > 500000){
        $message= "Sorry, your file is too large.";
        return false;
    }

    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
    $target_file)){
        $message=substr($target_file,4);
        return true;
    }else{
        $message= "Sorry, there was an error uploading your file.";
        return false;
    }
}

//function getCategoryName(int $id):string
//{
//    global  $pdo;
//    $sth = $pdo ->prepare('SELECT * FROM category WHERE id= ? ');
//    $sth->bindParam(1,$id,PDO::PARAM_INT);
//    $sth->setFetchMode(PDO::FETCH_CLASS,Category::class);
//    $sth->execute();
//    $category =$sth->fetch();
//    return $category->name;
//}

//function getCategories():array
//{
//    global $pdo;
//    $categories = $pdo->query('SELECT * FROM category')
//        ->fetchAll(PDO::FETCH_CLASS, 'Category');
//    return $categories;
//}

function saveProduct(string $name, string $category, string $description, string $picture)
{
    GLOBAL $pdo;

    $sth = $pdo->prepare('INSERT INTO car (model,description,category_id,picture) VALUES (?,?,?,?)');
    $sth->bindParam(1,$name);
    $sth->bindParam(2,$description);
    $sth->bindParam(3,$category);
    $sth->bindParam(4,$picture);
    $sth->execute();
}
?>
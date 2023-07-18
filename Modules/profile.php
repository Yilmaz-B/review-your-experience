<?php
function changeProfile():bool{
    global $pdo;
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);

    if($email !== false && !empty($firstName) && !empty($lastName)){
        $sth = $pdo->prepare('UPDATE `user` SET `first_name` = :f, `last_name` = :l WHERE `email` = :e');
            $sth->bindValue(':f', $firstName);
            $sth->bindValue(':l', $lastName);
            $sth->bindValue(':e', $email);
            $sth->execute();

        $_SESSION['user']->first_name = $firstName;
        $_SESSION['user']->last_name = $lastName;
        return true;
    } else {
        return false;
    }
}

function getProfile() {
    if(isset($_SESSION['user'])&&!empty($_SESSION['user'])){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM `user` WHERE `id` = :id");
        $query->bindParam("id", $id);
        $query->setFetchMode(PDO::FETCH_CLASS, 'User');
        $query->execute();
        $profile = $query->fetchAll();
        return $profile;
    }
}
function changePassword():bool{
    global $pdo;

    $oldPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_SPECIAL_CHARS);
    $newPassword = filter_input(INPUT_POST, 'newPassword', FILTER_SANITIZE_SPECIAL_CHARS);
    $newPassword2 = filter_input(INPUT_POST, 'newPassword2', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(!empty($oldPassword) && !empty($password) && !empty($newPassword2) && !empty($newPassword)){
        if($oldPassword === $password){
            if($oldPassword !== $newPassword){
                if($newPassword === $newPassword2){
                    $sth = $pdo->prepare('UPDATE `user` SET `password` = :p WHERE `email` = :e');
                    $sth->bindValue(':p', $newPassword2);
                    $sth->bindValue(':e', $email);
                    $sth->execute();
                    $_SESSION['user']->password = $newPassword2;
                    return true;
                } else{
                    return false;
                }
                return false;
            }
            return false;
        }
        return false;
    }
    return false;
}
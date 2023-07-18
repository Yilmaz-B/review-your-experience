<!DOCTYPE html>
<html>
<?php
include_once('../Templates/member/defaults/head.php');
?>
<body>
<?php
include_once('../Templates/member/defaults/menu.php');
include_once('../Templates/member/defaults/pictures.php');
global $getProfile;
global $profile;
global $msg;
?>
<?php  if(!empty($msg)): ?>
    <div class="alert alert-danger" role="alert">
        <?=$msg?>
    </div>
<?php endif;?>
<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="post">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control disabled" id="inputFirstName" type="text" name="firstName" placeholder="Enter your first name" value="<?php if(isset($_SESSION['user']->first_name)){echo $_SESSION['user']->first_name;} else{echo "";}; ?>" readonly="readonly">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control disabled" id="inputLastName" type="text" name="lastName" placeholder="Enter your last name" value="<?php if(isset($_SESSION['user']->last_name)){echo $_SESSION['user']->last_name;} else{echo "";}; ?>" readonly="readonly">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control disabled" id="inputEmailAddress" type="email" name="email" placeholder="Enter your email address" value="<?php if(isset($_SESSION['user']->email)){echo $_SESSION['user']->email;} else{echo "";}; ?>" readonly="readonly">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPassword">Current Password</label>
                            <input class="form-control disabled" id="inputPassword" name="password" type="password" name="currentPassword" placeholder="Enter your current password" value="<?php if(isset($_SESSION['user']->password)){echo $_SESSION['user']->password;} else{echo "";}; ?>" readonly="readonly">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPassword">Repeat Current Password</label>
                            <input class="form-control" id="inputPassword" name="password2" type="password" name="currentPassword" placeholder="Enter your current password" value="<?php if(isset($_POST['password2'])){echo $_POST['password2'];} else{echo "";}; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPassword">New Password</label>
                            <input class="form-control" id="inputPassword" type="password" name="newPassword" placeholder="Enter your new password" value="<?php if(isset($_POST['newPassword'])){echo $_POST['newPassword'];} else{echo "";}; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPassword">Repeat New Password</label>
                            <input class="form-control" id="inputPassword" type="password" name="newPassword2" placeholder="Enter your new password once again">
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-success" name="savePass" type="submit">Wijzigingen Opslaan</button>
                        <a class="btn btn-danger" type="submit" href="/member/editprofile">Profiel Aanpassen</a>
                        <a class="btn btn-primary" type="submit" href="/member/profile">Terug naar profiel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<?php
include_once('../Templates/member/defaults/footer.php');

?>
</body>
</html>
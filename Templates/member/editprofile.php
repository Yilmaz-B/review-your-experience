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
?>
<?php if(!empty($message)): ?>
    <div class="alert alert-success" role="alert">
        <?=$message?>
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
                                <input class="form-control" id="inputFirstName" type="text" name="firstName" placeholder="Enter your first name" value="<?php if(isset($_SESSION['user']->first_name)){echo $_SESSION['user']->first_name;} else{echo "";}; ?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" name="lastName" placeholder="Enter your last name" value="<?php if(isset($_SESSION['user']->last_name)){echo $_SESSION['user']->last_name;} else{echo "";}; ?>">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control disabled" id="inputEmailAddress" type="email" name="email" placeholder="Enter your email address" value="<?php if(isset($_SESSION['user']->email)){echo $_SESSION['user']->email;} else{echo "";}; ?>" readonly="readonly">
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-success" name="profile" type="submit">Wijzigingen Opslaan</button>
                        <a class="btn btn-danger" type="submit" href="/member/changepassword">Wachtwoord aanpassen</a>
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
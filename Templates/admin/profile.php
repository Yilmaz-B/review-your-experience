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
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="text-warning">
                            <td>email</td>
                            <td><?= $_SESSION['user']->email; ?></td>
                        </tr>
                        <tr class="text-warning">
                            <td>First Name</td>
                            <td><?= $_SESSION['user']->first_name; ?></td>
                        </tr>
                        <tr class="text-warning">
                            <td>Last Name</td>
                            <td><?= $_SESSION['user']->last_name; ?></td>
                        </tr>
                        <tr class="text-warning">
                            <form method="post">
                            <td>
                            <input type="submit" name="sendProfile" class="btn btn-success" value="Profiel aanpassen">
                            </td>
                            <td>
                            <input type="submit" name="sendPassword" class="btn btn-danger" value="Wachtwoord aanpassen">
                            </td>
                            </form>

                            <td></td>
                        </tr>
                        </tbody>
                    </table>
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
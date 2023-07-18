<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
    <?php
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    global $email;
    global $password;
    global $firstName;
    global $lastName;
    ?>
    <?php if(!empty($message)): ?>
        <div class="alert alert-danger" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>
    <div class="container-sm">
        <div class="row">
            <div class="col-md-12">
                <h4 class="display-5 fw-semibold">Autobedrijf Snel Weg</h4><br>
            </div>
        </div>
    </div>
    <div class="container-sm">
        <form method="post">
        <div class="container-sm">
            <div class="row">
                <div class="col-sm-6">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
                    <div id="emailHelp" class="form-text">Vul een geldige email in om te registereren.</div>
                </div>
                <div class="col-sm-6">
                    <label for="wachtwoord" class="form-label">Wachtwoord</label>
                    <input type="password" class="form-control" id="wachtwoord" name="password">
                    <div id="wachtwoord" class="form-text">Bedenk een wachtwoord voor u account..</div>
                </div>
            </div>
        </div>
        <div class="container-sm">
            <div class="row">
                <div class="col-sm-6 " >
                    <label for="voornaam" class="form-label">Voornaam</label>
                    <input type="text" class="form-control" id="voornaam" name="firstName"  value="<?php if(isset($_POST['firstName'])){echo $_POST['firstName'];} ?>">
                    <div id="voornaam" class="form-text">Vul uw voornaam in om te resgistereren.</div>

                </div>
                <div class="col-sm-6 mb-4">
                    <label for="achternaam" class="form-label">Achternaam</label>
                    <input type="text" class="form-control" id="achternaam" name="lastName" value="<?php if(isset($_POST['lastName'])){echo $_POST['lastName'];} ?>">
                    <div id="achternaam" class="form-text">Vul uw achternaam in om te resgistereren.</div>
                </div>
            </div>
        </div>
        <div class="container-sm">
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <input class="btn btn-warning" type="submit" value="Registeer" name="register">
                </div>

            </div>
        </div>
        </form>
    </div>
    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>
</body>
</html>

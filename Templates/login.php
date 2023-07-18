<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
    <?php
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <?php if(!empty($message)): ?>
        <div class="alert alert-success" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>
    <form method="post">
    <div class="container-sm">
        <div class="row">
            <div class="col-md-12">
                <h4 class="display-5 fw-semibold">Autobedrijf Snel Weg</h4><br>
                <h6 class="text-1"><b>Log in voor meer functies!</b></h6>
            </div>
        </div>
    </div>
    <div class="container-sm">
        <div class="row">
            <div class="col-sm-12">
                <label for="email" class="form-label">Email </label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>">
                <div id="emailHelp" class="form-text">Vul een geldige email in om te Inloggen.</div>
            </div>

        </div>
    </div>
    <div class="container-sm">
        <div class="row">
            <div class="col-sm-12" >
                <label for="wachtwoord" class="form-label">Wachtwoord</label>
                <input type="password" name="password" class="form-control" id="wachtwoord">
                <div id="wachtwoord" class="form-text">Vul uw geldige wachtwoord in om te inloggen.</div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-sm mb-3">
        <div class="row">
            <div class="col-sm-12 ">
                <input class="btn btn-warning" type="submit" name="login" value="Inloggen">
            </div>
        </div>
    </div>
    </form>
    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>
</body>
</html>
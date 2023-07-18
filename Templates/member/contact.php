<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container-fluid p-0">
    <?php
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <?php if(!empty($message)): ?>
        <div class="alert alert-success" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>
    <div class="container-sm">
        <div class="row">
            <div class="col-sm-6">
                <h3><b>Autobedrijf Snel Weg</b></h3>
            </div>
        </div>
    </div>
    <div class="container-sm">
        <div class="row">
            <div class="col-sm-6">
                <h4>Zuiddijk 20, 2614 KA Delft</h4>
                <br><br>
                <h6>Openingstijden</h6>
                Maandag = 08:00 - 18:00<br>
                Dinsdag = 08:00 - 18:00<br>
                Woensdag = 08:00 - 18:00<br>
                Donderdag = 08:00 - 18:00<br>
                Vrijdag = 08:00 - 18:00<br>
                Zaterdag = Gesloten<br>
                Zondag = Gesloten
                <br><br>
                <?php
                setlocale(LC_ALL, 'dutch');

                echo strftime("<b>Vandaag is %A %e %B %Y</b><br>");
                "<br>";
                $open="";
                $dicht="";

                $dag = date("l");
                if ($dag == "SATURDAY" || $dag == "SUNDAY"){
                    $open = "GESLOTEN";
                    $dicht = "GESLOTEN";
                }
                else{
                    $open = "08:00";
                    $dicht = "18:00";
                }
                echo "<br>";
                if(date("H:i") < $open || date("H:i") > $dicht){

                    echo "<b>We zijn momenteel gesloten!</b>";
                }else{
                    echo "<b>Wij zijn momenteel open </b><br><br><b>U kunt ons nu bereiken via</b> <br> Telefoon: 070 1122323<br> E-mail: snelweg@gmail.com " ;
                }

                ?>
                <div>
                    <br><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d613.9965988741187!2d4.320664829266877!3d52.00712582426759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b5555028916d%3A0x52f69f3507867c53!2sAutobedrijf%20Snel%20Weg!5e0!3m2!1snl!2snl!4v1671757825052!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="container">
                    <form method="post">
                        <h1>Contact ons</h1>
                        <label for="email"  class="form-label">Email </label>
                        <input type="email"  class="form-control" id="email" aria-describedby="emailHelp" value="<?= $_SESSION['user']->email; ?>">
                        <div id="emailHelp" class="form-text">Vul een geldige email in zodat wij u kunnen bereiken.</div>

                        <label for="country">Land</label>
                        <select id="country" name="country" class="cursor">
                            <option value="australia">Nederland</option>
                            <option value="canada">Belgie</option>
                            <option value="turkije">Turkije</option>
                            <option value="frankrijk">Frankrijk</option>
                            <option value="burundi">Burundi</option>
                        </select>
                        <div id="land" class="form-text">Selecteer het land waar u zich bevind.</div>
                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Type hier wat u wilt melden..." style="height:200px"></textarea>
                        <input class="btn btn-warning" name="button" type="button" value="Verzenden">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <?php
    include_once('../Templates/member/defaults/footer.php');
    ?>
</div>
</body>
</html>

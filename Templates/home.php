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
            <div class="container-sm">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="ps-4 display-5 fw-semibold">Autobedrijf Snel Weg</h4><br>

                        <p class="ps-4 pe-4 fs-5">Autobedrijf Snel Weg is een automobielbedrijf met zeer interessante occasions op voorraad. Met ruim 20 occasions en een snel wisselende voorraad in alle
                        prijsklassen en categorieën. Al onze occasions worden grondig nagekeken alvorens ze u worden aangeboden.<br><br>

                        In onze showroom treft u een compleet aanbod van geheel betrouwbare occasions van alle merken aan. Onze occasions zijn zo opgesteld dat u
                        er op uw gemak rond kunt lopen en van binnen en buiten kunt bekijken onder het genot van een kopje koffie.
                        Door onze goede contacten in de nationale en internationale autobranche kunnen wij altijd tegen scherpe prijzen occasions leveren.
                        Indien u een proefrit wilt maken, is dat geen probleem. U hoeft hiervoor geen afspraak te maken.
                        Heeft u het voertuig van uw dromen bij ons in de showroom zien staan maar kunt u hem niet in zijn geheel betalen dan is er de mogelijkheid een
                        financiering af te sluiten. Financieringen vinden plaats tegen marktconforme voorwaarden en op uiterst discrete wijze.<br><br>

                        Bij aankoop van een voertuig is het bij ons mogelijk dat u hierop garantie krijgt. De looptijd van deze garantie is afhankelijk van prijs, leeftijd en
                        onderhoud van het voertuig dat u koopt.<br><br>

                        Bel of mail ons gerust om naar de mogelijkheden en tarieven te informeren.<br>
                        Graag tot ziens</p>
                    </div>
                </div>
            </div>
            <hr>
            <?php
            include_once ('defaults/footer.php');
            ?>
    </body>
</html>

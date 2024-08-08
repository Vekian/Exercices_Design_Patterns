<?php

use App\Factory\Ship\ShipFactory;

require 'vendor/autoload.php';

$heroShipPoints = 200;
if(isset($_POST['remainingPointsHeroShip'])) {
    if($_POST['remainingPointsHeroShip'] != ''){
        $heroShipPoints = $_POST['remainingPointsHeroShip'];
    }

}


if(isset($_POST['ship'])){
    $factory = new ShipFactory();
    $ship = $factory->getShip($_POST['ship']);

    $heroShipPoints = $heroShipPoints - $ship->getDmg();

}


?>
<html>
    <head>
        <title>ShipWar</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" placeholder="Choose your ship, E/R/U/B" name="ship" />
            <input type="hidden" name="remainingPointsHeroShip" value="<?php echo $heroShipPoints ?>"/>
            <button type="submit">Envoyer</button>
        </form>
        <p><?php if(isset($_POST['ship'])): ?>
            You've been hit by
            <?php
                echo $ship->getDescription();
            ?>
        <?php endif; ?>
        </p>
        <p>
            You still have <?php echo $heroShipPoints ?>
        </p>
    </body>
</html>

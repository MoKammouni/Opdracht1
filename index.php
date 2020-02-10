
<?php
$naam = "Mohamed";
$leeftijd = 16;
$lengte = 1.86;

$provincie = "Zuid-Holland";
$woonplaats = "Den Haag";
$straat = "Schoeplaan";

echo "Hallo ik ben " .$naam. " , Ik ben " .$leeftijd. " Oud en ben " .$lengte. " meter lang";

echo sprintf("Ik ben %s, ik woon in %s. Dat is de provincie %s, op straat %s", $naam, $provincie, $woonplaats, $straat);
?>
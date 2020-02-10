
<?php
$naam = "Mohamed";
$leeftijd = 16;
$lengte = 1.86;

$woonplaats = "Den Haag";
$straat = "Schoeplaan";

//echo "Hallo ik ben " .$naam. " , Ik ben " .$leeftijd. " Oud en ben " .$lengte. " meter lang";

echo sprintf("Ik ben %s, ik woon in %s op straat %s", $naam, $woonplaats, $straat);
?>
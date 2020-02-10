
<?php
$naam = "Mohamed";
$leeftijd = 16;
$lengte = 1.86;

$provincie = "Zuid-Holland";
$woonplaats = "Den Haag";
$straat = "Schoeplaan";

//echo "Hallo ik ben " .$naam. " , Ik ben " .$leeftijd. " Oud en ben " .$lengte. " meter lang";

//echo sprintf("Ik ben %s, ik woon in %s. Dat is de provincie %s, op straat %s", $naam, $provincie, $woonplaats, $straat);

//echo gettype ($leeftijd);
//$leeftijd2 = (string) $leeftijd;
//echo gettype($leeftijd2);


//Dit is de eerste methode om een array te maken in PHP
$mijn_array = array($naam, $leeftijd, $lengte, $provincie, $woonplaats, $straat);

//Dit is de tweede methode om een array te maken in PHP
//$mijn_array = array();
//array_push($mijn_array, $naam, $leeftijd, $lengte, $provincie, $woonplaats, $straat);

print_r($mijn_array);
?>
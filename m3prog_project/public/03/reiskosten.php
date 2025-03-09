<?php
$afstand = 942.50; 
$benzinePerKm = 1 / 15; 
$tankinhoud = 50; 
$benzinePrijs = 1.89; 
$treinKosten = 60; 

$litersNodig = $afstand * $benzinePerKm;
$aantalTankbeurten = ceil($litersNodig / $tankinhoud);
$totaleKostenAuto = $litersNodig * $benzinePrijs;

echo "Totale afstand: {$afstand} km<br>";
echo "Totale prijs auto: €" . number_format($totaleKostenAuto, 2) . "<br>";
echo "Totaal aantal liter benzine: " . number_format($litersNodig, 2) . " liter<br>";
echo "Aantal tankbeurten: {$aantalTankbeurten} keer<br>";

if ($totaleKostenAuto > $treinKosten) {
    echo "Ik ga met de trein.";
} else {
    echo "Ik ga met de auto.";
}
?>

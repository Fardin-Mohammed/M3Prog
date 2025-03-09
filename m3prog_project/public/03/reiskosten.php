<?php
$afstand = 1078.56; 
$prijs_per_liter = 1.89; 
$treinkosten = 60; 
$tankinhoud = 50; 
$km_per_liter = 15; 

$liter_benzine = $afstand / $km_per_liter;
$aantal_tankbeurten = ceil($liter_benzine / $tankinhoud);
$autokosten = $liter_benzine * $prijs_per_liter; 

if ($autokosten > $treinkosten) {
    $keuze = "Ik ga met de trein.";
} else {
    $keuze = "Ik ga met de auto.";
}

echo "<h2>Reiskosten Berekening</h2>";
echo "Totale afstand: $afstand km<br>";
echo "Totale kosten auto: €" . number_format($autokosten, 2) . "<br>";
echo "Aantal liter benzine: " . number_format($liter_benzine, 2) . " liter<br>";
echo "Aantal keren tanken: $aantal_tankbeurten keer<br>";
echo "<strong>Reisadvies:</strong> $keuze";
?>

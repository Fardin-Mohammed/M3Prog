<?php

// Stap 1: Variabele $opvoorraad met een boolean waarde
$opvoorraad = false;

// Controleren of het product niet op voorraad is
if ($opvoorraad == false) {
    echo "Niet op voorraad";
}

echo "<br>";

// Stap 2: Nieuwe variabele voor aantal op voorraad
$aantalOpVoorraad = 20;

// Opnieuw bepalen of het product op voorraad is
$opvoorraad = ($aantalOpVoorraad > 0);

// If-else statement om voorraadstatus te tonen
if ($aantalOpVoorraad > 0) {
    echo "Artikel is op voorraad";
} else {
    echo "Niet op voorraad";
}

?>

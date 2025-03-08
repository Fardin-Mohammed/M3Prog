<?php

// Variabele $opvoorraad met een boolean waarde
$opvoorraad = false;

// Controleren of het product niet op voorraad is
if ($opvoorraad == false) {
    echo "Niet op voorraad";
}

echo "<br>";

// Nieuwe variabele voor aantal op voorraad
$aantalOpVoorraad = 20;

// Opnieuw bepalen of het product op voorraad is
$opvoorraad = ($aantalOpVoorraad > 0);

// Controleren of het product niet op voorraad is
if ($opvoorraad == false) {
    echo "Niet op voorraad";
}
?>

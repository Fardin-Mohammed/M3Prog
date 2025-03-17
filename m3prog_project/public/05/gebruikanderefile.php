<?php
// Laad de file 'returncalc.php' in met include_once
include_once 'returncalc.php';

// Nu kun je de functies aanroepen en de resultaten tonen
echo add(100, 100); // Resultaat: 200
echo "<br>";
echo add(4, 9);     // Resultaat: 13
echo "<br>";
echo add(33, 33);   // Resultaat: 66
echo "<br><br>";

echo subtract(200, 200); // Resultaat: 0
echo "<br>";
echo subtract(8, 16);    // Resultaat: -8
echo "<br>";
echo subtract(66, 66);   // Resultaat: 0
echo "<br><br>";

echo divide(100, 100);  // Resultaat: 1
echo "<br>";
echo divide(4, 12);     // Resultaat: 0.3333...
echo "<br>";
echo divide(55, 55);    // Resultaat: 1
echo "<br><br>";

echo multiply(1000, 1000); // Resultaat: 1000000
echo "<br>";
echo multiply(20, 80);     // Resultaat: 1600
echo "<br>";
echo multiply(44, 44);     // Resultaat: 1936
?>

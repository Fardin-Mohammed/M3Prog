<?php
echo '3';
echo "<br>";

function add($getal1, $getal2)
{
    $som = $getal1 + $getal2;
    return $som;
}

echo add(100, 100);
echo "<br>";
echo add(4, 9);
echo "<br>";
echo add(33, 33);

echo "<br><br><br>";

function subtract($getal3, $getal4)
{
    $som1 = $getal3 - $getal4;
    return $som1;
}
echo subtract(200, 200);
echo "<br>";
echo subtract(8, 16);
echo "<br>";
echo subtract(66, 66);

echo "<br><br><br>";

function divide($getal5, $getal6)
{
    $som2 = $getal5 / $getal6;
    return $som2;
}
echo divide(100, 100);
echo "<br>";
echo divide(4, 12);
echo "<br>";
echo divide(55, 55);

echo "<br><br><br>";

function multiply($getal7, $getal8)
{
    $som3 = $getal7 * $getal8;
    return $som3;
}
echo multiply(1000, 1000);
echo "<br>";
echo multiply(20, 80);
echo "<br>";
echo multiply(44, 44);
?>

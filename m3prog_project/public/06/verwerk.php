<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stad = $_POST["stad"];
    $datum = $_POST["datum"];
    $weertype = $_POST["weertype"];
    $temperatuur = $_POST["temperatuur"];

    $fahrenheit = ($temperatuur * 9/5) + 32;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Weerbericht</title>
</head>
<body>

    <h1>Weerbericht</h1>

    <p>Stad: <?php echo $stad; ?></p>
    <p>Datum: <?php echo $datum; ?></p>
    <p>Weertype: <?php echo $weertype; ?></p>
    <p>Temperatuur: <?php echo $temperatuur; ?>°C / <?php echo round($fahrenheit, 1); ?>°F</p>

    <br>
    <a href="formulier.html">Terug</a>

</body>
</html>

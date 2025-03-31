<?php
$stad = isset($_GET["stad"]) ? $_GET["stad"] : "Onbekend";
$temperatuur = isset($_GET["temperatuur"]) ? $_GET["temperatuur"] : "Onbekend";
$land = isset($_GET["land"]) ? $_GET["land"] : "Onbekend";
?>

<!DOCTYPE html>
<html lang="ENGLISH">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sigma Strings</title>
</head>
<body>
    <h1>Informatie uit de URL</h1>
    <p>Stad: <?php echo htmlspecialchars($stad); ?></p>
    <p>Temperatuur: <?php echo htmlspecialchars($temperatuur); ?>°C</p>
    <p>Land: <?php echo htmlspecialchars($land); ?></p>
</body>
</html>

<?php
$leeftijd = isset($_GET["leeftijd"]) ? $_GET["leeftijd"] : "16";
$opleiding = isset($_GET["opleiding"]) ? $_GET["opleiding"] : "software development";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SKiNidI pagina</title>
</head>
<body>
    <h1>Jouw gegevens</h1>
    <p>Leeftijd: <?php echo htmlspecialchars($leeftijd); ?></p>
    <p>Opleiding: <?php echo htmlspecialchars($opleiding); ?></p>
</body>
</html>

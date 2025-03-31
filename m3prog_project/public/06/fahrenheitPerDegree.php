<!DOCTYPE html>
<html lang="En">
<head>
    <meta charset="UTF-8">
    <title>Sigma Temperatuur</title>
</head>
<body>
    <h1>Omrekenen van Celsius naar Fahrenheit</h1>
    <?php
    for ($i = 0; $i <= 45; $i++) {
        echo "<a href='fahrenheit.php?celsius=$i'>$i graden Celsius naar Fahrenheit omrekenen</a><br>";
    }
    ?>
</body>
</html>

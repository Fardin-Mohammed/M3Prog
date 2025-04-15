<?php
$verbruik = [
    "ps5" => 19,
    "wasmachine" => 30,
    "telefoon" => 1,
    "nes" => 2,
    "gameboy" => 1
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sigma AAP</title>
</head>
<body>
<h2>Verbruik van apparaten</h2>

<div class="resultaat">
    <?php
    foreach ($verbruik as $apparaat => $kwh) {
        echo "<p><span class='apparaat'>$apparaat</span> verbruikt $kwh KwH</p>";
    }


    $totaal = 0;
    foreach ($verbruik as $kwh) {
        $totaal += $kwh;
    }

    echo "<p class='totaal'>Totaal verbruik<br><strong>$totaal KwU</strong></p>";
    ?>
</div>
</body>
</html>

<?php
$weer = [
    "maandag" => 11.1,
    "dinsdag" => 9.6,
    "woensdag" => 8.2,
    "donderdag" => 10.6,
    "vrijdag" => 5.8,
    "zaterdag" => -1.5,
    "zondag" => -3.5
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>AAP</title>
</head>
<body>

<h2>Weersvoorspelling komende week</h2>

<table>
    <tr>
        <th>Dag</th>
        <th>Graden</th>
    </tr>
    <?php
    foreach ($weer as $dag => $graden) {
        echo "<tr><td>$dag</td><td><span class='temperatuur'>{$graden} °C</span></td></tr>";
    }
    ?>
</table>

<br>

<?php
$dag1 = "maandag";
$dag2 = "zaterdag";
$dag3 = "dinsdag";
$dag4 = "donderdag";
$dag5 = "zondag";

echo "<p>Vandaag $dag1 is het {$weer[$dag1]} graden</p>";
echo "<p>Vandaag $dag2 is het {$weer[$dag2]} graden</p>";
echo "<p>Vandaag $dag3 is het {$weer[$dag3]} graden</p>";
echo "<p>Vandaag $dag4 is het {$weer[$dag4]} graden</p>";
echo "<p>Vandaag $dag5 is het {$weer[$dag5]} graden</p>";
?>

</body>
</html>
<?php
$persoon = [
    "voornaam" => "Luigi",
    "achternaam" => "Mario",
    "leeftijd" => 19,
    "favoriet eten" => "pasta",
    "minst favoriet eten" => "paddenstoelen",
    "woonplaats" => "mushroom kingdom"
];
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table>
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>
    <?php
    foreach ($persoon as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    ?>
</table>
</body>
</html>

<?php

//R = rood, O= oranje, G = groen
$stopLichtKleur = 'G';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // nieuwe php tag
        if ($stopLichtKleur == 'G')//als groen
        {
            echo "<button style='background-color:#00FF00;height:25px;width:25px;'/>";
        }
        else if ($stopLichtKleur == 'O')// als oranje
        {
            echo "<button style='background-color:#FFA500;height:25px;width:25px;'/>";
        }
        else//als rood
        {
            echo "<button style='background-color:#FF0000;height:25px;width:25px;'/> ";       
        }
    ?>
</body>
</html>
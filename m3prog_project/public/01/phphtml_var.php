<?php
//hier komt code
$title = "Mijn mooie website";
$datum = date('d-m-Y');
$tijd = date("H:i");
$favorieteGame= "Gta 5";
$mooisteGetal= 42;
$favorieteShow= "Cukur";
$leuksteStad= "sigmaStad";

?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum;?>,
         en de tijd is <?php echo $tijd;?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo $favorieteGame;?></p>
        <p><h2>$mooisteGetal :</h2><?= $mooisteGetal ?></p>
        <p><h2>$favorieteShow :</h2><?= $favorieteShow ?></p>
        <p><h2>$leuksteStad :</h2><?= $leuksteStad ?></p>
    </body>
</html>

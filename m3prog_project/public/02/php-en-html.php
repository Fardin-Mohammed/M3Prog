<?php
$titel = 'Een php html voorbeeld pagina';
$afbeelding = "https://upload.wikimedia.org/wikipedia/commons/4/43/Bonnet_macaque_%28Macaca_radiata%29_Photograph_By_Shantanu_Kuveskar.jpg";
$alternatieveText = 'Monkey is a common name that may refer to most mammals of the infraorder Simiiformes, also known as simians. Traditionally, all animals in the group now known as simians are counted as monkeys except the apes. Thus monkeys, in that sense, constitute an incomplete paraphyletic grouping; however, in the broader sense based on cladistics, apes (Hominoidea) are also included, making the terms monkeys and simians synonyms in regard to their scope.';
$auteur = 'Fardin-Mohammed';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1><?php echo $titel; ?></h1>
        <img src="<?php echo $afbeelding;?>" alt="<?php echo $alternatieveText;?>">   
    <section>
        <h2>Auteur: <?= $auteur;?></h2>
    </section>
</body>
</html>
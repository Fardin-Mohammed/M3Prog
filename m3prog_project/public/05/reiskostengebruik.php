<?php
include 'reiskosten.php';

$reizen = [
    "Berlijn" => [663, 15, 1.90],
    "Stockholm" => [1438, 20, 1.46],
    "Kiev" => [1991, 18.47, 2.23]
];

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiskosten Calculator</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        main {
            max-width: 600px;
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        article {
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fff;
        }
        h1 {
            text-align: center;
        }
        h2 {
            color: #333;
        }
        p {
            margin: 5px 0;
            font-size: 16px;
        }
        .kosten {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>

<main>
    <h1>Reiskosten Berekening</h1>
    <h2>De styling van de website is gemaakt met ai!</h2>

    <?php foreach ($reizen as $stad => $gegevens): 
        $kosten = berekenRitKosten($gegevens[0], $gegevens[1], $gegevens[2]);
    ?>
        <article>
            <h2>Bestemming: <?= $stad ?></h2>
            <p>Afstand: <?= $gegevens[0] ?> km</p>
            <p>Verbruik: <?= $gegevens[1] ?> km per liter</p>
            <p>Brandstofprijs: €<?= number_format($gegevens[2], 2, ',', '.') ?> per liter</p>
            <p class="kosten">Totale kosten: €<?= number_format($kosten, 2, ',', '.') ?></p>
        </article>
    <?php endforeach; ?>

</main>
</body>
</html>

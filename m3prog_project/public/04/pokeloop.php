<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <?php
    // Pokémon namen array
    $pokemons = ["Pikachu", "Charizard", "Bulbasaur", "Squirtle", "Eevee"];

    // Bijbehorende afbeelding-URL's
    $images = [
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png",
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/006.png",
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png",
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png",
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/133.png"
    ];

    // Loop door de array met count()
    for ($i = 0; $i < count($pokemons); $i++) {
        echo "<div class='pokemon-card'>";
        echo "<h1>{$pokemons[$i]}</h1>";
        echo "<img src='{$images[$i]}' alt='{$pokemons[$i]}'>";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
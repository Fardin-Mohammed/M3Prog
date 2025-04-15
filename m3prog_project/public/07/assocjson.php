<?php
include "associatief.php";

$jsonArray = [
    "trophiesPerGame" => $trophiesPerGame,
    "persoon" => $persoon,
    "weer" => $weer,
    "verbruik" => $verbruik
];

header("Content-Type: application/json");
echo json_encode($jsonArray);

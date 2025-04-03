<?php
$temperaturen = [
    "ma" => 14,
    "di" => 16,
    "wo" => 18,
    "do" => 19,
    "vr" => 17,
    "za" => 15,
    "zo" => 13
];

$weer_icons = [
    "ma" => "assets/images/sunny.png",
    "di" => "assets/images/cloudy.png",
    "wo" => "assets/images/rainy.png",
    "do" => "assets/images/stormy.png",
    "vr" => "assets/images/snowy.png",
    "za" => "assets/images/foggy.png",
    "zo" => "assets/images/windy.png"
];

$dag = isset($_GET["dag"]) ? $_GET["dag"] : "ma"; 

if (!array_key_exists($dag, $temperaturen)) {
    $dag = "ma";
}

$celsius = $temperaturen[$dag];
$fahrenheit = round(($celsius * 9/5) + 32, 1);
$icoon = $weer_icons[$dag];
?>

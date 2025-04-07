<?php
header("Content-Type: application/json");

$mario = ["name"=>"mario","gemiddeldeCijfer"=> 7.5,"klas"=>"mushroom"];

$wario = ["name"=>"wario","gemiddeldeCijfer"=> 4.5,"klas"=>"W"];

$dataobject = ["studenten"=> [$mario,$wario]];
echo json_encode($dataobject);


$bowser = ["name"=>"bowser","gemiddeldeCijfer"=> 6.5,"klas"=>"shell"];
$toad = ["name"=>"toad","gemiddeldeCijfer"=> 8.5,"klas"=>"mushroom"];

$dataobject = ["studenten"=> [$bowser,$toad]];
echo json_encode($dataobject);
?>
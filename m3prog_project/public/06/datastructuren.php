<?php
$films = [
    "films" => [
        [
            "title" => "The Matrix",
            "details" => [
                "regisseur" => "The Wachowskis",
                "jaar" => 1999,
                "genre" => "Science Fiction"
            ]
        ],
        [
            "title" => "Inception",
            "details" => [
                "regisseur" => "Christopher Nolan",
                "jaar" => 2010,
                "genre" => "Science Fiction"
            ]
        ],
        [
            "title" => "Interstellar",
            "details" => [
                "regisseur" => "Christopher Nolan",
                "jaar" => 2014,
                "genre" => "Drama"
            ]
        ]
    ]
];

$json = json_encode($films, JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $json;
?>
<?php
$steden = [
    "amsterdam",
    "rotterdam",
    "utrecht"
];

$jsonString = '{
    "studenten": [
      {
        "name": "mario",
        "gemiddeldCijfer": 7.5
      },
      {
        "name": "wario",
        "gemiddeldCijfer": 4.5
      }
    ]
  }';

$stedenRead = json_decode($jsonString);

print_r($stedenRead);

$jsonRead = json_decode($jsonString);

print_r($jsonRead);
?>

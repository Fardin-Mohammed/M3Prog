<?php

require_once __DIR__ . '/classes.php'; // deze heb ik wel ai anders werkte het niet

$klasA = new Klas("4A");
$klasB = new Klas("4B");

$mario = new Student("Mario", 25, "vuurballen", $klasA);
$wario = new Student("Wario", 30, "knockback", $klasB);
$bowser = new Student("Bowser", 40, "vlammen", $klasA);
$peach = new Student("Peach", 23, "paraplu", $klasB);

$studenten = [$mario, $wario, $bowser, $peach];

header('Content-Type: application/json');
echo json_encode($studenten, JSON_PRETTY_PRINT);

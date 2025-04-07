<?php
class student
{
    public $name;
    public $gemiddeldeCijfer;
}

class dataObject
{
    public $studenten;
}

$dataObject = new dataObject();
$dataObject->studenten = [$mario,$bowser,$peach,$wario];


// Mario
$mario = new student();
$mario->name="mario";
$mario->$gemiddeldeCijfer=8;
$mario->$klas="1A";

// Wario

$wario = new student();
$wario->name="wario";
$wario->$gemiddeldeCijfer=9;
$wario->$klas="1B";

// bowser

$bowser = new student();
$bowser->name="bowser";
$bowser->$gemiddeldeCijfer=10;
$bowser->$klas="1F";

// Peach

$peach = new student();
$peach->name="peach";
$peach->$gemiddeldeCijfer=10;
$peach->$klas="1D";

echo $mario;
echo $wario;
echo $bowser;
echo $peach;
?>
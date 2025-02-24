<?php


$standaardString = 'hello world<br>';
$extraString = "extra world<br>";
$voornaamString = 'luigi';
$achternaamString = 'mario';
$fullname = "Luigi" ." ". "mario  <br>";
$naam = 'Yoshi';
$ondertekentDoor = 'directeur bowser';
$enemy = een andere vijand dan Goomba;
// De br zit erin om afstand te maken tussen de variabels

echo $standaardString;
echo $extraString;
echo $fullname;

echo "<br/>";






$emailTekst = "
Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze Koopa Troopa`s vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>
";
echo $emailTekst;
?>
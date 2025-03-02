<?php
$typeGerecht = 'Hoofd';
$naamGerecht = 'Zinger Burger';
$prijs = '€5.99';
$beschrijving = 'Een heerlijke kipburger, met tomaat sla, chedder kaas en zinger filet.';
$ingredientenLijst = 'hamburgerbroodje
,stukje cheddar kaas,
 tomaat,
 stukje ijsbergsla,
 Zinger filet';
 $allergenenLijst = 'Tarwe';

$menuItem = "
  Gerecht type: $typeGerecht<br>
  <br>
  $naamGerecht $prijs<br>
  <br>
  $beschrijving<br>
  Ingegredientenlijst:<br>
  $ingredientenLijst<br>
  <br>
  Bent u allergisch? bekijk dan hieronder de allergenen:<br>
  $allergenenLijst<br>
  ";

  echo $menuItem;
?> 


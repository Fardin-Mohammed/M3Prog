<?php
function mijnPrint($printText)
{
    print("$printText");
    print("<br>");
}

//Vraag 1
//er zijn te weinig argumenten om de de mijn mijnPrint te functioneren.

mijnPrint("regel 1");
mijnPrint("regel 2");
mijnPrint("regel 3");
mijnPrint("Vraag 1 er zijn te weinig argumenten om de mijn mijnPrint te functioneren.");

$dezeGaatMee = "deze waarde wordt meegenomen";
mijnPrint("$dezeGaatMee");
?>
<?php

function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs)
{
    // Hoeveel liter benzine heb je nodig?
    $aantal_liters = $afstand_km / $km_per_liter;

    // Kosten: aantal liter x literprijs
    $kosten_euro = $aantal_liters * $liter_prijs;

    return $kosten_euro;
}
?>

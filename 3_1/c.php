<?php

//Hier Variablen definieren
$daten = [
'name' => 'Gian Rathgeb',
'wohnort' => 'Beringen',
'haarfarbe' => 'hellbraun',
'alter' => '18',
];

echo "Guten Tag <br/>";
echo "Mein Name ist ", $daten["name"], " und ich komme von ", $daten["wohnort"], "<br/>";
echo "Meine Haare sind ", $daten["haarfarbe"], " ich bin ", $daten["alter"], " Jahre alt.";

?>
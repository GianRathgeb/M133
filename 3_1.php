<!-- Aufgaben a und b -->

<?php

//Hier Variablen definieren
$name = 'Gian Rathgeb';
$wohnort = 'Beringen';
$haarfarbe = 'hellblond';
$alter = '18';

print "Guten Tag <br/>
Mein Name ist $name und ich komme von $wohnort. <br/>
Meine Haare sind $haarfarbe, ich bin $alter Jahre alt.";

?>


<!-- Aufgabe c -->

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
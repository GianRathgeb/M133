<!-- Auftrag 3.2 -->

<!-- Aufgaben -->

<?php

$title = "PHP Farben Test";
// Aufgabe H unverständlich ausgedrückt, mögliche Lösung: $color = "rbg("
mt_srand((float) microtime() * 1000000);
$random = mt_rand(0, 255);
$color = "rgb(" . dechex($random) . ", " . dechex($random) . ", " . dechex($random) . ")";

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?></title>
    <style>
        body {
            background-color: <?=$color ?>
        }
    </style>
</head>

<body>

</body>

</html>
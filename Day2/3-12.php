<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = array();
    mt_srand((float) microtime() * 1000000);
    do {
        $random = mt_rand(1, 49);
        if (!in_array($random, $numbers)) {
            array_push($numbers, $random);
        }
    } while (sizeof($numbers) < 6 );
    $i = 1;
    echo "Lottozahlen:<br>";
    foreach ($numbers as $number) {
        echo "Zahl " . $i . ": " . $number . "<br>";
        $i = $i + 1;
    }
    unset($number);
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-12</title>
</head>

<body>
    <form action="3-12.php" method="post">
        <input type="submit">
    </form>
</body>

</html>
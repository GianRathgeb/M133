<?php
function dec_to_bin_hex($decimal) // Range: https://www.php.net/manual/de/function.decbin.php
{
    if (!is_numeric($decimal)) {
        return false;
    } else {
        $bianry = decbin($decimal);
        $hex = dechex($decimal);
        $string = "Umrechung der Dezimalzahl " . $decimal . ":\nins Binärsystem: " . $bianry . "\nins Hexadezimalsystem: " . $hex;
        return $string;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $decimal = $_POST['decimal'];
    echo dec_to_bin_hex($decimal);
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-10</title>
</head>

<body>
    <form action="3-10.php" method="POST">
        <fieldset>
            <label for="decimalinput">Dezimalzahl eingeben: </label>
            <input type="text" name="decimal" id="decimalinput">

        </fieldset>
        <input type="submit">
    </form>
</body>

</html>
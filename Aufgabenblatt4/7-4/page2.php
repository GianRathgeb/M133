<?php

if (isset($_COOKIE['Username']) and isset($_COOKIE['ViewTime'])) {
    $Username = $_COOKIE['Username'];
    $ViewTime = $_COOKIE['ViewTime'];

    echo 'Username: ' . $Username . '<br>
    Viewing Time: ' . $ViewTime;

    setcookie('Username', '', -1);
    setcookie('ViewTime', '', -1);
} else {
    echo "Geben Sie bitte einen Benutzername und ein Passwort ein!";
}

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2</title>
</head>

<body>

</body>

</html>
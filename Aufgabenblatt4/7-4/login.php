<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['name'];

    if (!isset($Username) or empty($Username)) {
        $Username = 'Gast';
    } else {
        setcookie("Username", $Username, time() + 3600);
        setcookie("ViewTime", date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']), time() + 3600);
    }

    # Text Output
    echo 'Welcome ' . $Username . ' <br>
    <a href="page2.php">Page 2</a><br>';
}


?>


<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.5 - Login</title>
</head>

<body>

</body>

</html>
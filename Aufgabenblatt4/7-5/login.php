<?php

    session_start();
    $Username = $_POST['name'];

    if (!isset($Username) OR empty($Username)) {
        $Username = 'Gast';
    }

    # Start Session
    $_SESSION['Username'] = $Username;
    $_SESSION['CreationDate'] = $_SERVER['REQUEST_TIME'];

    # Text Output
    echo 'Welcome '.$Username.' <br>
    <a href="Page2.php">Seite 2</a><br>
    <a href="Logout.php">Logout</a><br>';


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
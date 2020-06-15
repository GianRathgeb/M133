<?php

    session_start(); # Important!

    if (!isset($_SESSION['Username'])) {
        die("Please Login and come back");
    }

    # Save Session to $Username
    $Username = $_SESSION['Username'];

    # Output text
    echo $Username.', your still logged in<br>
    <a href="logout.php">Logout</a>';

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.5 Page 2</title>
</head>
<body>
    
</body>
</html>
<?php
$filename = "hashes.txt";
$lines = [];
$file = fopen($filename, "r");
while ($line = fgets($file)) {
    $line = explode(";", $line);
    array_push($lines, $line);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (in_array($username, $lines)) {
        foreach ($lines as $login) {
            if (($login[0] == $username) and (password_verify($password, $login[1]))) {
                echo "Login erfolgreich";
            break;
            }
        }
        echo "Username and/or Password incorrect.";
    } else {
        echo "Username and/or Password incorrect.";
    }
}


?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-2-Login</title>
</head>

<body>

</body>

</html>
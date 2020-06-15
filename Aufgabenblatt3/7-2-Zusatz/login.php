<?php
# Password = Username lowercase
$filename = "hashes.txt";
$file = fopen($filename, "r");
$lines = [];
while ($line = fgets($file)) {
    array_push($lines, $line);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    foreach ($lines as $login) {
        $login = explode(";", $login);
        if ($login[0] == $username) { 
            if (password_verify($password, trim($login[1]))) {
                echo "Login erfolgreich";
                break;
            } else {
                echo "Username and/or Password incorrect.";
            }
        }
    }
} else {
    echo "Username and/or Password incorrect.";
}



?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-2-Zusatz-Login</title>
</head>

<body>

</body>

</html>
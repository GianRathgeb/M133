<?php
$users = [
    "admin" => "xyz",
    "test" => "1234",
    "gian" => "passwort",
    "rat" => "rathgeb",
    "bbz1" => "lolbbz",
];

function authenticate($username, $password, $users)
{  #Sehr lange mit in_array gearbeitet.
    if (array_key_exists($username, $users)) {
        if ($users[$username] == $password) {
            return True;
        }
    }
    return False;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (authenticate($username, $password, $users)) {
            echo "Dies ist die geheime Information!";
        } else {
            echo "Zugriff verweigert!";
        }
    } else {
        echo "Zugriff verweigert!";
    }
}

?>


<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-11 Server</title>
</head>

<body>

</body>

</html>
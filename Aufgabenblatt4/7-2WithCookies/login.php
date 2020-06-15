 <?php

    $User = "gian";
    $PasswordUser = 'test';
    $saved_hash = password_hash($PasswordUser, PASSWORD_DEFAULT);

    $username = $_POST["username"];
    echo "Username: " . $username . "<br />";

    $password = $_POST["password"];
    echo "Password: " . $password . "<br  />";

    if (password_verify($password, $saved_hash)) {
        echo "Password correct";
    } else {
        echo "Password incorrect";
    }

    ?>

 <!DOCTYPE html>
 <html lang="de">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>7-2 Cookies Login</title>
 </head>

 <body>

 </body>

 </html>
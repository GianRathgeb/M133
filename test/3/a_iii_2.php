<?php
    session_start();
    if (empty($_POST['username']) or empty($_POST['password'])) {
        echo "Bitte füllen Sie alle Felder aus!";
        session_destroy();
    } else {
        $username = $_POST['username'];
        $_SESSION['username'] = $username;
        $passwordhash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        setcookie('password', $passwordhash, time() + 3600);
        echo "Hallo ".$username."<br>";
    }

?>
<a href="a_iii_3.php">Seite 2</a>
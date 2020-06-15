<?php
    session_start();
    if (!empty($_SESSION['username']) and !empty($_COOKIE['password'])) {
        echo "Benutzername: ".$_SESSION['username']."<br>";
        echo "Password Hash: ".$_COOKIE['password']."<br>";
        setcookie('password', " ", -1);
        session_destroy();
    } else {
        session_destroy();
        echo "Bitte geben Sie ihre Anmeldedaten ein.";
    }

?>

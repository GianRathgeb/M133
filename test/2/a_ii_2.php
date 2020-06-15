<?php

    if (!isset($_POST['number']) or empty($_POST['number'])) {
        echo "Keine Zahl eingegeben<br>";
    } else {
        $number = $_POST['number'];
        for ($i = 0; $i < $number; $i ++) {
            echo "Gian<br>";
        }
    }

    echo date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);

?>
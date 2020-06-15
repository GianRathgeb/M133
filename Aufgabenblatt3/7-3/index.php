<?php
$pi_addr = "::1";
$time = $_SERVER["REQUEST_TIME"];
if ($_SERVER["REMOTE_ADDR"] == $pi_addr) {
    echo "Sie waren heute schon hier";
    echo date('Y-m-d H:i:s', $time);
} else {
    echo "Sie waren heute noch nicht hier";
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-3</title>
</head>
<body>
    
</body>
</html>
<?php

function namensausgabe($name, $alter)
    {
        $string = "Mein Name ist $name, ich bin $alter Jahre alt";
        return $string;
    }
?>



<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-4</title>
</head>
<body>

<?php echo namensausgabe("Gian", "18") ?>
    
</body>
</html>
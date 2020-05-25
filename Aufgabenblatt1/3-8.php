<?php
$text = "Guten Tag Herr Vollzugsbeamter";

function textumwandlung($text, $art){
    $new = "";
    if (strtolower($art) == "g"){
        $new = strtoupper($text);
    }

    elseif (strtolower($art) == "k"){
        $new = strtolower($text);
    }
    else{
        echo "Achtung! Falscher Modifikationsparameter! Gültig sind nur 'g' und 'k'!";
    }

    echo $new;
}
?>



<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-8</title>
</head>
<body>

<?php textumwandlung($text, "g")?>
    
</body>
</html>
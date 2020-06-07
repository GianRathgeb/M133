<?php
$filename = "text.txt";
$lines = [];

function print_array($array)
{
    foreach ($array as $element) {
        echo $element . "<br>";
    }
}


$file = fopen($filename, "r");
while ($line = fgets($file)) {
    array_push($lines, $line);
}

print_array($lines);
echo "<br>";
rsort($lines);
print_array($lines);

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-2</title>
</head>

<body>

</body>

</html>
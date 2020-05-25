<?php
$filename = "Geheimniss.txt";
$originalhash = '$2y$10$IMnFwNoMBV9TcKYj38Ra4eEtrpNLuaLyIGgGWqNE.ty008VHoUmui';

$file = file_get_contents($filename);
$hash = password_hash($file, PASSWORD_DEFAULT);

if (password_verify($file, $originalhash)) {
    echo "Datei ok!";
} else {
    echo "Datei wurde verändert!";
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-1</title>
</head>

<body>

</body>

</html>
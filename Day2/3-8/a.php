<!DOCTYPE html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $field1 = "Inhalt des ersten Feldes ist: " . $_POST['field1'];
    $field2 = "Inhalt des zweiten Feldes ist: " .  $_POST['field2'];
} else {
    $field1 = "";
    $field2 = "";
}
?>

<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-8</title>
</head>

<body>
    <form method="post" action="3-8.php">
        <fieldset>
            <label for="fiel1">Feld 1:</label>
            <input type="text" name="field1">
        </fieldset>
        <fieldset>
            <label for="fiel2">Feld 2:</label>
            <input type="text" name="field2">
        </fieldset>
        <fieldset>
            <input type="submit">
        </fieldset>
    </form>
    <p id="outputfield1"><?= $field1 ?></p>
    <p id="outputfield2"><?= $field2 ?></p>
</body>

</html>
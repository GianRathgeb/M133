<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['color'])) {
        $color = $_POST['color'];
    } else {
        echo "Es wurde keine Hintergrundfarbe ausgewählt.";
        $color = 'white';
    }
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-9</title>
    <style>
        body {
            background-color: <?= $color ?>
        }
    </style>
</head>

<body>
    <form action="a.php" method="POST">
        <fieldset>
            <label for="color_red">Rot:</label>
            <input type="radio" id="color_red" value="red" name="color">
            <label for="color_yellow">Gelb:</label>
            <input type="radio" id="color_yellow" value="yellow" name="color">
            <label for="color_green">Grün:</label>
            <input type="radio" id="color_green" value="green" name="color">
            <label for="color_blue">Blue:</label>
            <input type="radio" id="color_blue" value="blue" name="color">
            <label for="color_gray">Grau:</label>
            <input type="radio" id="color_gray" value="gray" name="color">
        </fieldset>
        <input type="submit">
    </form>
</body>

</html>
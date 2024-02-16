<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount</title>
</head>
<body>
<form method="post">
    <label for="number">Present Temperature :</label>
    <input type="number" name="temp"><br><br>
    <?php
if (isset($_POST["temp"])) {
        $temp = $_POST["temp"];
    if ($temp>25)
    {
        echo "It's Sunny day !";
    }
    else
    {
        echo "Consider taking an umbrella !";
    }
}
    ?>
</form>
</body>
</html>

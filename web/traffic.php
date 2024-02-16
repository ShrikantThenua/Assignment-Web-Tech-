<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="text">Enter the Color</label>
    <input type="text" name="color"><br>
</form>
    <?php
if (isset($_POST["color"])) {
        $color = $_POST["color"];
    if ($color=="red")
    {
        echo "STOP";
    }
    elseif ($color=="yellow")
    {
        echo "SLOW_DOWN";
    }
    elseif ($color=="green")
    {
        echo "GO";
    }
    else 
    echo "Input the correct color";
}
    ?>

</body>
</html>
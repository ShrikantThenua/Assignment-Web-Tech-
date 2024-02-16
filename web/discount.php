<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount</title>
</head>
<body>
<form method="post">
    <label for="number">Order Price :</label>
    <input type="number" name="num"><br><br>
    <?php
if (isset($_POST["num"])) {
        $num = $_POST["num"];
    if ($num>1000)
    {
        echo "Congratulations! You have gotten the discount on your shopping over 1000
        THANK YOU ! Visit Again!";
    }
    else
    {
        echo "Sorry! you haven't get any discount on this amount";
    }
}
    ?>
</form>
</body>
</html>

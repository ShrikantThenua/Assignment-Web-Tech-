<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount</title>
</head>
<body>
<form method="post">
    <label for="number">Total Price :</label>
    <input type="number" name="num"><br><br>
    <input type="submit" name="Find" value="Grand_Total">
    <?php
if (isset($_POST["Find"])) {
        $num = $_POST["num"];
    if ($num>5000)
    {
        echo $num-(10*$num)/100;
    }
    else
    {
        echo $num;
    }
}
    ?>
</form>
</body>
</html>

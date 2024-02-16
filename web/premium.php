<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
<form method="post">
    <label for="type">Account type :</label>
    <input type="text" name="account"><br><br>
    <?php
if (isset($_POST["account"])) {
        $account = $_POST["account"];
    if ($account=="premium")
    {
        echo "Welcome Premium User !";
    }
    else
    {
        echo "Welcome Basic User !";
    }
}
    ?>
</form>
</body>
</html>


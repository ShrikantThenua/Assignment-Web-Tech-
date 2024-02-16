<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
</head>
<body>
<form method="post">
    <label for="user">Enter the Username</label>
    <input type="text" name="user"><br>   
<?php
if (isset($_POST["user"])) {
        $user_id = $_POST["user"];
        if ($user_id == "user123")
        {
            echo "Welcome! You are eligible for a free trial period of 7 days. Sign up now!";
        } 
        else 
        {
            echo "Welcome back! Choose your subscription plan.";
        }
}
    ?>
</body>
</html>

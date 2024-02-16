<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>LOGIN PAGE</title>
</head>
<body>
    <form method="post">
    <lable for="username">Username </label>
    <input type="text" name="username"><br><br>
    <lable for="password">Password </label>
    <input type="password" name="password"><br><br>
    <input type="submit" name="btn" value="Login">
<?php 
    if(isset($_POST["btn"]))
    {
        $name=$_POST["username"];
        $pass=$_POST["password"];
        if($name=="user"){
            if($pass=="123"){
                echo "Login Successful !";
            }
            else
            echo "Incorrect Password";  
        }
        else 
        echo "Invalid username";
    } 
    ?>
    </form>
</body>
</html>


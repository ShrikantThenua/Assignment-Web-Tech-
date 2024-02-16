<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness</title>
</head>
<body>
    <form method="post">
        <label for="steps">Enter the no. of steps :</label>
        <input type="number" name="number"><br><br>
    </form>
    <?php
    if(isset($_POST["number"])){
        $steps=$_POST["number"];
        if ($steps<5000){
            echo "The Fitness level is 'Beginner'";
        }
        elseif ($steps>5000 and $steps<10000){
            echo " the Fitness level is 'Intermediate'";
        }
        else{
            echo "The Fitness level is Advanced";
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade</title>
</head>
<body>
<form method="post">
        <label for="score">Enter the no. of steps :</label>
        <input type="number" name="number"><br><br>
    </form>
    <?php
    if(isset($_POST["number"])){
        $score=$_POST["number"];
        if ($score<60){
            echo "The Grade is 'F'";
        }
        elseif ($score>=60 and $score<70){
            echo "The Grade is 'D'";
        }
        elseif ($score>=70 and $score<80){
            echo "The Grade is 'C'";
        }
        elseif ($score>=80 and $score<90){
            echo "The Grade is 'B'";
        }
        else{
            echo " The Grade is 'A'";
        }
    }
    ?>
</body>
</html>
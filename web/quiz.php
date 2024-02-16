<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$correctAnswers = ["Q1" => "Option2", "Q2" => "Option3", "Q3" => "Option1"]; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$userAnswers = [
"Q1" => isset($_POST["Q1"]) ? $_POST["Q1"] : null,
"Q2" => isset($_POST["Q2"]) ? $_POST["Q2"] : null,
"Q3" => isset($_POST["Q3"]) ? $_POST["Q3"] : null,
];
$score = 0;
foreach ($correctAnswers as $question => $correctAnswer) {
if ($userAnswers[$question] === $correctAnswer) {
$score++;
}
}
echo "<p>Your Score: $score out of " . count($correctAnswers) . "</p>";
}
?>
<form method="post" action="">
<label for="Q1">Question 1: What is the capital of India?</label><br>
<input type="radio" name="Q1" value="Option1"> LUCKNOW
<input type="radio" name="Q1" value="Option2"> DELHI
<input type="radio" name="Q1" value="Option3"> ODISSA<br><br>
<label for="Q2">Question 2: What is the largest continent in the 
world?</label><br>
<input type="radio" name="Q2" value="Option1"> Australia
<input type="radio" name="Q2" value="Option2"> Africa
<input type="radio" name="Q2" value="Option3"> Asia<br><br>
<label for="Q3">Question 3: What is the capital of 
uttarpradesh?</label><br>
<input type="radio" name="Q3" value="Option1"> LUCKNOW
<input type="radio" name="Q3" value="Option2"> delhi
<input type="radio" name="Q3" value="Option3"> Bihar<br><br>
<button type="submit">Submit Answers</button>
</form>
</body>
</html>

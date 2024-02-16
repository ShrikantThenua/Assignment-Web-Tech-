<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>
<?php 
function truncateTitle($title){
    $max_length = 50 ;
    if (strlen($title) > $max_length){
        $title = substr($title,0, $max_length). "...";
    }
    return $title;
} 
$article_title = "This is a very long article title that exceeds the character limit";
$truncated_title = truncateTitle($article_title);
echo $truncated_title;
?>
</body>
</html>
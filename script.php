<?php 

$text = $_POST['text'];
$badword = $_POST['badword'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword Submitted</title>
</head>
<body>
    <p><?php echo $text; ?></p>
    <h5>Text is </h5>
</body>
</html>
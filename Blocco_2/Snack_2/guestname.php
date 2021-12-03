<?php
$guests = ["Stefano","Nicola","Andrea","Paolo","Mario","Fabio"];
$invited = $_GET["guest"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   echo "<p>",in_array($invited, $guests) ? 'ok' : 'ko',"</p>";
    ?>
</body>
</html>
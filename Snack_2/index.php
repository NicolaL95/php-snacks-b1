<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="access">
        <?php
    $name = $_GET["name"];
    $age = $_GET["age"];
    $mail =$_GET["mail"];
    if(strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age) !== false){
        echo "<p>"," accesso riuscito ","</p>";
    }
    else{
         echo "<p>"," accesso negato ","</p>";
    }
 
?>
</div>
</body>
</html>
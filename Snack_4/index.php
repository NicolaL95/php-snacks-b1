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
    $difNumb = [];
    for ($i = 0; $i < 15; $i++) {
        $randNum = rand(1,20);
        while(in_array($randNum,$difNumb))
        {
        $randNum = rand(1,20);
        }
    array_push($difNumb,$randNum);    
}
 foreach($difNumb as $key => $value)
{
  echo $value, '<br>';
}
?>
</body>
</html>
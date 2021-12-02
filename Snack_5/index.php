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
 $par = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit libero in perferendis qui? Error quae velit, porro doloremque dolore est. Velit libero in perferendis qui? Error quae velit, porro doloremque dolore est";
 echo "<p>",$par,"</p>" ;
 $dotPos = 0;
for($i = 0; $i < strlen($par);$i++){
if($par[$i] == "."){
$par = substr_replace($par, '<br>', $i+1, 0); 
}
}
echo "<p>",$par, ".","</p>";
 ?>   
</body>
</html>
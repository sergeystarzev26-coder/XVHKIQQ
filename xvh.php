<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type= "text" name= "num1"></p>
        <input type= "text" name= "num2"></p>
        <input type= "text" name= "num3"></p>
        <input type ="submit" value="send">

    </form>
<h1>функции</h1>
<?php
$rdy = 0;
$a = $_GET["num1"];
$b = $_GET["num2"];
$c = $_GET["num3"];
function triangleSquare($a, $b, $c) 
{
 $p = ($a + $b + $c) / 2 ;
 global $rdy;
 $rdy = sqrt($p  * ($p - $a) * ($p - $b) * ($p - $c));
}
triangleSquare($a, $b, $c);
echo $rdy;
?>
</body>
</html>
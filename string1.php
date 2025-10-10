<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $j = 0;
$str = "Hello (world)";
while ($str[$j] != "(") 
    {  
    $j++;
    }
    $j++;
while ($str[$j] != ")"){
    echo $str[$j];
        $j++;}
?>
<br>
<?php
"</br>";
$ilya = [
'words' => 0,
'xvh' => "hello my nami is ilya"
];
for ($i = 0; $i < mb_strlen($ilya['xvh']); $i++)
    {
        if ($ilya['xvh'][$i] == " ")
            {
                $ilya['words']++;
            }
    }
echo $ilya['words'] + 1;
?>
<h1>задача 3</h1>



 <?php
"</br>";
$ilya = [
'words' => 0,
'xvh' => "my name is ilya and im idiot"
];

$str = explode(" ", $ilya["xvh"]);
foreach($str as $words => $word)
    for ($i = 0; $i < mb_strlen($word);
         $firstchar = str[0];
         $lastchar = str[strlen($str)];
                
            
    
    
?>
<br>

</body>
</html>
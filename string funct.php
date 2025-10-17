<?php
$str = "hello world from russia!";
$words = explode(' ', $str);   
?>
<?php 
foreach ($words as $word):?>
<p><?= $word ?></p>
<?php endforeach; 
$string = implode(',', $words);
echo $string;
?>
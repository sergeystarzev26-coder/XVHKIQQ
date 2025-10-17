<h1>задание 1</h1>
<?php
function brackets() {
    

    $str = "hello (world) from Russia!";
    $first = strpos( $str, '(') + 1;
    $second = strpos( $str, ')');
    $length = $second - $first;
    var_dump($first );
    var_dump($second );
    echo substr($str, $first, $length);
    }
brackets();
?>
<h1>задание 2</h1>
<?php
$str = 'one two three minecraft oxxydie.';
$withoutdot = str_replace('.',' ', $str);
$spaces = explode(' ', $withoutdot );{
    echo count( $spaces )  - 1 .'';
}
?>
<h1>задание 3</h1>
<?php
$str = 'xvhkiqq xvhkiqx roblox anime dota burb';
$allwords = explode(' ', $str );
foreach( $allwords as $word ) 
    {
    $length = mb_strlen($word);
    $first = ($word[0]);
    $last = strpos( $word[$length - 1],')');

    if($first == $last) 
        {
        echo $word[0];
    }
}

?>
<h1>задание 1</h1>
<?php
$nums = [1,2,3,4,5,6,7,8,9,10,11,12,13,0,15,16,17];
 function rakeuntilzero($nums) {
    global $key;
    $key = array_search(0,$nums,true);
    for ($i = 0; $i < $key; $i++)
{
        echo $nums[$i],'<br>';
}
 }
 rakeuntilzero($nums);

?>
<h1>задание 2</h1>
<?php
$nums = [1,2,3,4,5,6,7,8,9,10,11,12,13,0,15,16,17];
function switchnumb($nums) 
{
    global $mostnum;
    global $minnum;
    $mostnum = array_max($nums);
    $minnum = array_min($nums);
    list($nums[array_min($nums)], $nums[array_max($nums)]) = array($nums[array_max($nums)], $nums(array_min($nums)));
    foreach ($nums as $k => $v) {
        echo $nums,'<br>';
    }}
?>
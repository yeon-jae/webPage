<?php
//3개 중에서 가장 큰 수 찾기 
function maxTwo($i,$j){
    if($i>$j)
        return $i;
    else
        return $j;
}
function maxTre($x,$y,$z){
    return maxTwo(maxTwo($x,$y),maxTwo($y,$z));
}
$a=10;
$b=5;
$c=7;
$max_num=maxTre($a,$b,$c);

echo"$a, $b, $c 중 가장 큰 수 : $max_num";
?>
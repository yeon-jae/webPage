<?php
/*
function_plus
    function plus($a,$b){
        $c=$a+$b;
        echo $c;
    }
    plus(10,20);
    echo"<br>";
    plus(300,500);
    
    function plus($a,$b){
        $c=$a+$b;
        return $c;
    }
    $result1=plus(10,20);
    echo $result1."<br>";
    $result1=plus(300,500);
    echo $result1."<br>";

    function sum($a,$b){
        $sum=0;
        while($a<=$b)
        {
            $sum=$sum+$a;
            $a++;
        }
        return $sum;
    }
    $from =1;
    $to=100;
    
    $total=sum($from,$to);
    echo("$from 에서 $to 까지의 합: $total");*/
    function man_age($year,$month,$day,$b_year,$b_month,$b_day){
        if($b_month<$month){
            $age=$year-$b_year;
        }
        elseif($b_month==$month){
            if($b_day<=$day)
                $age=$year-$b_year;
            else
                $age=$year-$b_year-1;
        }
        else{
            $age=$year-$b_year-1;
        }
        return $age;
    }
?>
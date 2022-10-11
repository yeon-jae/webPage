<?php
    $score=array(87,76,98,87,87,93,79,85,88,63);
    $sum=0;
    for($i=0;$i<10;$i++)
    {
        $sum=$sum+$score[$i];       //학생 10명의 점수 누적합
    }
    $avg= $sum/10;
    echo "입력된 점수: ";
    for($i=0; $i<10; $i++)
    {   
        echo $score[$i]." ";
            //입력된 학생의 점수 출력
    } 
    echo "<br>";
    echo("합계: $sum, 평균 $avg");
?>
<?php
    /* 오늘 날짜와 생년월일에 따라
       만 나이 계산하기  */
    $now_year=$_POST["now_year"];
    $now_month=$_POST["now_month"];
    $now_day=$_POST["now_day"];
    $birth_year=$_POST["birth_year"];
    $birth_month=$_POST["birth_month"];
    $birth_day=$_POST["birth_day"];
    function man_age($year, $month, $day, $b_year, $b_month, $b_day)
    {
        if($b_month < $month)  
            $age= $year - $b_year;
        else if($b_month == $month)
        { 
            if($b_day <= $day)
                $age= $year - $b_year;
            else
                $age= $year - $b_year - 1;
        } 
        else
        {
            $age= $year - $b_year - 1;
        }
        return $age;
    }


    $your_age = man_age($now_year, $now_month, $now_day,
                $birth_year, $birth_month,
                $birth_day);

    echo "오늘 날짜 : $now_year 년 $now_month 월 $now_day 일<br>";
    echo "생년월일 : $birth_year 년 $birth_month 월 $birth_day 일생<br>";
    echo "만 나이 : $your_age 세";
?>

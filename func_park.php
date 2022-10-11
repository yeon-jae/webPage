<?php
    function cal_fee1($day,$age){ //주간 입장권에 대한
        if($day=="주간"){
            if($age>12&&$age<65)
                $money=26000;
            else
                $money=19000;
        }
        else{
            if($age>12&&$age<65)
                $money=21000;
            else
                $money=16000;
        }
        return $money;
    }
    function cal_fee2($day,$age){ //자유이용권에 대한
        if($day=="주간"){
            if($age>12&&$age<65)
                $money=33000;
            else
                $money=24000;
        }
        else{
            if($age>12&&$age<65)
                $money=28000;
            else
                $money=21000;
        }
        return $money;
    }
?>
<?php
    echo"<tr>";
    $first=$_POST["first"];
    $second=$_POST["second"];

    function plus($a,$b){
        $c=$a+$b;
        echo $c;
    }
    plus($first,$second);

?>
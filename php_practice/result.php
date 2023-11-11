<html>
    <head>
    <meta charset="utf-8">
    </head>
    <style>
        tr{border:solid 1px gray; text-align: center; padding:10px;}
        td{border:solid 1px gray; text-align: center; padding:10px;}
    </style>
    <body>
    <?php
        //4-10
        echo"4-10 for문예제<br><br>";
        $first_num=$_POST["first_num"];
        $end_num=$_POST["end_num"];
        $count=0;
        $ok=true;
        for($i=$first_num;$i<=$end_num;$i++)
        {
            if($i%4!=0)
            {
                echo $i." ";
                $count++;
                $ok=true;
            }
            if($count!=0&&$count%10==0&&$ok==true)
            {
                echo"<br>";
                $ok=false;
            }
        }
        ?>

        <br><br>
        <!--4-11-->
        <table border="1" width="300">
        <tr>
            <td>섭씨</td>
            <td>화씨</td>
        </tr>
        <?php
        echo"4-11 섭씨 화씨 변환 <br>";
        $temp=$_POST["temp"];
        $temp_2=$_POST["temp_2"];
        for($c=$temp;$c<=$temp_2;$c=$c+5)
        {
            $f=$c*9/5+32;
            echo "<tr align='center'><td>$c</td><td>$f</td></tr>";
        }
        ?>
        </table>
        <br><br>
        <!--4-12-->
        <table border-collapse="collapse" width="600">
        <?php
        echo"4-12 구구단 <br>";
        echo"<tr>";
        $gnum=$_POST["gnum"];
        for($a=$gnum;$a<=9;$a++)
        {
            echo"<tr>";
            echo"<td>$a 단</td>";
            for($b=1; $b<=9;$b++)
            {

                $c=$a*$b;
                echo "<td>{$a}x{$b}=$c</td>";
            }
            echo"</tr>";
        }
        ?>
        </table>
        <!--4-15별 출력-->
        <?php
        echo"<br>";
        echo"4-15 별 출력<br>";
        $star_first=$_POST["star_first"];
        $star_end=$_POST["star_end"];
        for($a=$star_first;$a<=$star_end;$a++)
        {
            for($b=$star_end;$b>=$a;$b--)
                echo"&nbsp;";
            for($c=1;$c<=$a;$c++)
                echo"*";
        echo"<br>";
        }
    ?>
    <!--5-2배열 예제-->
    <?php
        echo"<br>5-2배열 예제<br>";
        $scores=array(87,45,23,12,99,98,96,95,67,97);
        $sum=0;
        for($a=0;$a<10;$a++)
        {
            $sum=$sum+$scores[$a];
        }
        $avg=$sum/10;
        echo("합계:$sum,평균:$avg");
    ?>
    <?php
        echo"<br><br>";
        echo"5-4버블정렬 문제<br>";
            $num=$_POST['num'];
            $count=10;
            echo"정렬 전: ";
            for($a=0;$a<10;$a++)
                echo $num[$a]." ";
            echo "<br>";
            //for($i=$count)

            for($i=$count-2;$i>=0;$i--)
            {
                for($j=0;$j<=$i;$j++)
                {
                    if($num[$j]>$num[$j+1])
                    {
                        $tmp=$num[$j];
                        $num[$j]=$num[$j+1];
                        $num[$j+1]=$tmp;
                    }
                }
            }
            echo"버블정렬 후: ";
            for($a=0;$a<10;$a++)
            {
                echo $num[$a]." ";
            }
            ?>

    </body>
    </html>
    
    
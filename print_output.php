<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
    <?php
        $first_num=$_POST["first_num"];
        //$end_num=$_POST["end_num"];
        $count=0;
        $ok=true;
        for($i=$first_num;$i<=700;$i++)
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

    </body>
    </html>
    
    
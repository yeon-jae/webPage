<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
    <?php
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

    </body>
    </html>
    
    
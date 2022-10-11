<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
            <table border="1" width="300">
                <tr align="center">
                    <td width="150">섭씨</td>
                    <td>화씨</td>
                </tr>
                <?php
                $temp=$_POST["temp"];
                $temp_2=$_POST["temp_2"];
                for($c=$temp;$c<=$temp_2;$c=$c+5)
                {
                    $f=$c*9/5+32;
                    echo "<tr align='center'><td>$c</td><td>$f</td></tr>";
                }
                ?>
            </table>
        </form>
    </body>
</html>
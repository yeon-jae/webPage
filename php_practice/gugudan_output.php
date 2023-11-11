<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">
<style>
    table{border-collapse:collapse;width:600px; }
    tr{border:solid 1px gray; text-align: center; padding:5px;}
    td{border:solid 1px gray; padding:10px;}
</style>
</head>
<body>
<table>
<?php
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

</body>
</html>


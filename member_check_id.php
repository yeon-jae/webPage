<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 중복 체크</title>
</head>
<body>
    <h3>아이디 중복 체크</h3>
    <p>
    <?php
        $id=$_GET["id"];
        if(!$id){
            echo("<li>아이디를 입력해주세요!</li>");
        }
        else{
            $con=mysqli_connect("localhost","user1","12345","sample");
            $sql="select * from members where id='$id'";
            $result=mysqli_query($con,$sql);
            $num_record=mysqli_num_rows($result);//결과 레코드 수 
            if($num_record){
                echo"<li>".$id."아이디는 중복됩니다. </li>";
                echo"<li>다른 아이디를 사용해주세요!</li>";
            }
            else{
                echo"<li>".$id."아이디는 사용가능합니다. </li>";
            }
            mysqli_close($con);
        }
    ?>
    </p>
    <div id="close">
        <img src="./img/close.png" onclick="javascript:self.close()">
    </div>
</body>
</html>
<?php
    //mbti정보 넘겨 받는 페이지 
    $mbti_id=$_GET["mbti_id"];
    $tel=$_POST["tel"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
    $gmbti=$_POST["gmbti"];

    if(!$mbti_id){
        echo("
        <script>
            alert('로그인후 이용해주세요');
            history.go(-1)
        </script>
    ");
    exit;
    }

    $con=mysqli_connect("localhost","user1","12345","sample");
    $sql="select * from members where id='$mbti_id'";
    
    $result=mysqli_query($con, $sql);
    $num_record=mysqli_num_rows($result);
    
    if($num_record){
        $sql="insert into mbti(mbti_id,tel,age,gender,gmbti)";
        $sql.="values('$mbti_id','$tel','$age','$gender','$gmbti')";
        mysqli_query($con,$sql);
    }
    echo("
    <script>
        location.href ='mbti_question_form.php';
    </script>
    ");
    
?>

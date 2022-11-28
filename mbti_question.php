<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mbti결과 보여주고 결과값 db저장</title>
</head>

<body>
    <?php
    //라디오 버튼에서 선택된 데이터 처리하기 
    $character = $_POST["character"];
    $intuition = $_POST["intuition"];
    $feelings = $_POST["feelings"];
    $plan = $_POST["plan"];
    //결과 보여주기 
    if ($character == "E" && $intuition == "S" && $feelings == "T" && $plan == "J") {
        $mbti = "ESTJ";
    }
    if ($character == "E" && $intuition == "S" && $feelings == "T" && $plan == "P") {
        $mbti = "ESTP";
    }
    if ($character == "E" && $intuition == "S" && $feelings == "F" && $plan == "J") {
        $mbti = "ESFJ";
    }
    if ($character == "E" && $intuition == "S" && $feelings == "F" && $plan == "P") {
        $mbti = "ESFP";
    }
    if ($character == "E" && $intuition == "N" && $feelings == "T" && $plan == "J") {
        $mbti = "ENTJ";
    }
    if ($character == "E" && $intuition == "N" && $feelings == "F" && $plan == "J") {
        $mbti = "ENFJ";
    }
    if ($character == "E" && $intuition == "N" && $feelings == "T" && $plan == "P") {
        $mbti = "ENTP";
    }
    if ($character == "E" && $intuition == "N" && $feelings == "F" && $plan == "P") {
        $mbti = "ENFP";
    }
    //I형
    if ($character == "I" && $intuition == "S" && $feelings == "T" && $plan == "J") {
        $mbti = "ISTJ";
    }
    if ($character == "I" && $intuition == "S" && $feelings == "T" && $plan == "P") {
        $mbti = "ISTP";
    }
    if ($character == "I" && $intuition == "S" && $feelings == "F" && $plan == "J") {
        $mbti = "ISFJ";
    }
    if ($character == "I" && $intuition == "S" && $feelings == "F" && $plan == "P") {
        $mbti = "ISFP";
    }
    if ($character == "I" && $intuition == "N" && $feelings == "T" && $plan == "J") {
        $mbti = "INTJ";
    }
    if ($character == "I" && $intuition == "N" && $feelings == "F" && $plan == "J") {
        $mbti = "INFJ";
    }
    if ($character == "I" && $intuition == "N" && $feelings == "T" && $plan == "P") {
        $mbti = "INTP";
    }
    if ($character == "I" && $intuition == "N" && $feelings == "F" && $plan == "P") {
        $mbti = "INFP";
    }




    ?>
    <!--화면에 MBTI값 출력하기 -->
    <div style="font-size:30px;text-align:center;padding-top:100px;">
        <p> 당신의 mbti는 <b><?= $mbti ?></b>입니다.</p>
    </div>
    <br>
    <div style="text-align:center;">
        <?php
        if ($mbti == "ENFJ") {
            echo "
            <img src='./img/ENFJ.png'>
            ";
        }
        if ($mbti == "ENFP") {
            echo "
            <img src='./img/ENFP.png'>
            ";
        }
        if ($mbti == "ENTJ") {
            echo "
            <img src='./img/ENTJ.png'>
            ";
        }
        if ($mbti == "ENTP") {
            echo "
            <img src='./img/ENTP.png'>
            ";
        }
        if ($mbti == "ESFJ") {
            echo "
            <img src='./img/ESFJ.png'>
            ";
        }
        if ($mbti == "ESFP") {
            echo "
            <img src='./img/ESFP.png'>
            ";
        }
        if ($mbti == "ESTJ") {
            echo "
            <img src='./img/ESTJ.png'>
            ";
        }
        if ($mbti == "ESTP") {
            echo "
            <img src='./img/ESTP.png'>
            ";
        }
        if ($mbti == "INFJ") {
            echo "
            <img src='./img/INFJ.png'>
            ";
        }
        if ($mbti == "INFP") {
            echo "
            <img src='./img/INFP.png'>
            ";
        }
        if ($mbti == "INTJ") {
            echo "
            <img src='./img/INTJ.png'>
            ";
        }
        if ($mbti == "INTP") {
            echo "
            <img src='./img/INTP.png'>
            ";
        }
        if ($mbti == "ISFJ") {
            echo "
            <img src='./img/ISFJ.png'>
            ";
        }
        if ($mbti == "ISFP") {
            echo "
            <img src='./img/ISFP.png'>
            ";
        }
        if ($mbti == "ISTJ") {
            echo "
            <img src='./img/ISTJ.png'>
            ";
        }
        if ($mbti == "ISTP") {
            echo "
            <img src='./img/ISTP.png'>
            ";
        }
        ?>
    </div>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>mbti 문제폼</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/mbti.css">
    <script type="text/javascript" src="./js/mbti_check.js"></script>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <div id="mbti_content">
            <div id="mbti_title">
                <span>사례를 읽고 해당하는 항목을 선택해주세요.</span>
            </div>
            <div id="mbti_content1">
                <form name="mbti_form" method="post" action="mbti_question.php">
                    <ul>
                        <p>
                            Q1.타인과 대화를 할때, 상대방이 내가 무슨 생각을 하는지 모른다면
                        </p><br>
                        <li>
                            "내가 무슨 생각을 하는지 모른다면, 그건 당신이 귀담아 듣지 않았기 때문일걸요?"
                            <input type="radio" name="character" value="E"> <br>
                            "내가 무슨 생각을 하는지 모른다면, 그건 당신이 묻지 않았기 때문이에요."
                            <input type="radio" name="character" value="I"> <br>
                        </li>
                        <br><br>
                        <p>
                            Q2. A: "와 나 오늘 너무 피곤해서 드라이 샴푸로 대충 머리 감고 나왔어"<br>
                            B: "헐 드라이 샴푸 좋아? 마른 머리에 비비는 건가 대박," <br>
                            B의 말을 들은 당신의 생각은?
                        </p><br>
                        <li>
                            피곤할땐 드라이 샴푸가 좋다는 말처럼 들리고, 드라이 샴푸에 대한 결과에 관심을 표현해주길 바라는거 아닌가?
                            <input type="radio" name="feelings" value="T"> <br>
                            얼마나 피곤하길래 드라이 샴푸를 했을까,,? 저런 대답 들으면 속상할 수도 있겠다.
                            <input type="radio" name="feelings" value="F"> <br>
                        </li>
                        <br><br>
                        <p>
                            Q3.과제를 제출하지 못했을때 당신이 드는 생각은?
                        </p><br>
                        <li>
                            과제 미제출로 인한 감점, 학점 걱정중,,
                            <input type="radio" name="intuition" value="S"> <br>
                            왜,,과제 제출 기한이 오늘까지 였을가?
                            <input type="radio" name="intuition" value="N"> <br>
                        </li>
                        <br><br>
                        <p>
                            Q4.약속이 있는 날 당신의 행동은?
                        </p><br>
                        <li>
                            혹시 모르니까 약속 2-3시간 전부터는 준비 시작
                            <input type="radio" name="plan" value="J"> <br>
                            늦지않게 시간 거의 다 되어서 준비, 바쁘게 준비함
                            <input type="radio" name="plan" value="P"> <br>
                        </li>
                    </ul>
                    <div id="next_btn">
                        <a href="#"><img src="./img/result.png" onclick="check_question()"></a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>
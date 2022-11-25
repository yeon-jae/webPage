<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mbti 정보입력폼</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/mbti.css">
    <script type="text/javascript" src="./js/mbti.js"></script>
</head>
<body>
    <header>
        <?php include "header.php";?>
    </header>
	<section>
		<div id="main_img_bar">
            <img src="./img/main_img.png">
        </div>
        <div id="main_content">
      		<div id="mbti_box">
	    		<div id="mbti_title">
		    		<span>정보를 입력해주세요</span>
	    		</div>
	    		<div id="mbti_form">
          		<form  name="mbti_form" method="post" action="mbti_start.php?mbti_id=<?=$userid?>">		       	
                  	<ul>
					  <!--<li><input type="text" name="id" placeholder="아이디" ></li>-- id-->
                    <li>
						<span class="col1">검사할 아이디: </span>
					  	<span class="col2"><?=$userid?></span>
					</li>
					<li><input type="text" id="tel" name="tel" placeholder="전화번호"></li>  <!--tel-->
                    <li><input type="text" id="age" name="age" placeholder="나이"></li><!-- age -->
                    <li><input type="text" id="gender" name="gender" placeholder="성별"></li><!-- gender -->
                    <li><input type="text" id="gmbti" name="gmbti" placeholder="자신의 예상mabti를 입력해주세요."></li><!--gmbti-->
                  	</ul>
                  	<div id="next_btn">
                      	<a href="#"><img src="./img/next.png" onclick="check_inputinfo()"></a>
                  	</div>		    	
           		</form>
        		</div> 
    		</div> 
        </div> 
	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>
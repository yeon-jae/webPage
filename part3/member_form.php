<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/member.css">
    <title>회원가입 폼</title>

<script>
    function check_input(){
        if(!document.member_form.id.value){
            alert("아이디를 입력하세요!");
            document.member_form.id.focus();
            return;
        }
        if(!document.member_form.pass.value){
            alert("비밀번호를 입력하세요!");
            document.member_form.pass.focus();
            return;
        }
        if(!document.member_form.pass_confirm.value){
            alert("비밀번호를 확인하세요!");
            document.member_form.pass_confirm.focus();
            return;
        }
        if(!document.member_form.name.value){
            alert("이름을 확인하세요!");
            document.member_form.name.focus();
            return;
        }
        if(!document.member_form.email1.value){
            alert("이메일 주소를 확인하세요!");
            document.member_form.email1.focus();
            return;
        }
        if(!document.member_form.email2.value){
            alert("이메일 주소를 확인하세요!");
            document.member_form.email2.focus();
            return;
        }
        if(document.member_form.pass.value!=document.member_form.pass_confirm.value){
            alert("비밀번호가 일치하지 않습니다. \n다시 입력해주세요");
            document.member_form.pass.focus();
            document.member_form.pass.select();
            return;
        }
        document.member_form.submit()
    }
    function reset_form(){
        document.member_form.id.value="";
        docrument.member_form.pass.value="";
        document.member_form.pass_confirm.value="";
        document.member_form.name.value="";
        document.member_form.email1.value="";
        document.member_form.email2.value="";
        document.member_form.id.focus();
        return;
    }
    function chekc_id(){
        window.open("member_check_id.php?id="+document.member_form.id.value,"IDcheck",
        "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
    }
</script>
</head>
<body>
    <header>
    	<?php include "header.php";?>
    </header>
    <section>
    <div id="main_img_bar">
            <img src="./img/main_img.png">
    </div>  
    <div id="join_box">
        <form name="member_form" method="post" action="member_insert.php">
            <h2>회원가입</h2>
            <div class="form id">
                <div class="col1">아이디</div>
                <div class="col2">
                    <input type="text" name="id">
                </div>
                <div class="col3">
                    <a href="#"><img src="/.img/check_id.gif" onclick="check_id()"></a>
                </div>
            </div> 
            <div class="clear"></div>
            <div class="form">
                <div class="col1">비밀번호확인</div>
                <div class="col2">
                    <input type="password" name="pass_confirm">
                </div>
            </div>
            <div class="clear"></div>
            <div class="form">
            <div class="col1">이름</div>
                <div class="col2">
                    <input type="text" name="name">
                </div>
            </div>
            <div class="clear"></div>
            <div class="form email">
                <div class="col1">이메일</div>
                <div class="col2">
                    <input type="text" name="email1">@ <input type="text" name="email2">
                </div>
            </div>
            <div class="clear"></div>
            <div class="bottom_line"></div>
            <div class="buttons">
                <img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()">&nbsp;
                <img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif"
                    onclick="reset_form()">
	        </div>
        </form>
    </div>
    </section>
    <footer>
        <?php include "footer.php";?>
    </footer>

</body>
</html>
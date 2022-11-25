function check_inputinfo(){

    if(!document.mbti_form.tel.value){
        alert("전화번호를 입력하세요");
        document.mbti_form.tel.focus();
        return;
    }
    if(!document.mbti_form.age.value){
        alert("나이를 입력하세요");
        document.mbti_form.age.focus();
        return;
    }
    if(!document.mbti_form.gender.value){
        alert("성별을 입력하세요");
        document.mbti_form.gender.focus();
        return;
    }
    if(!document.mbti_form.gmbti.value){
        alert("예상 mbti를 입력하세요");
        document.mbti_form.gmbti.focus();
        return;
    }
    document.mbti_form.submit();
}
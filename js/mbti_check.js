function check_question(){
    if(document.querySelector('input[name="character"]').checked){ 
        var result = document.querySelector('input[name="character"]:checked').value;
            if((result=='E'&& result!='I')||(result=='I'&& result!='E')){
                document.mbti_form.submit();
            }
           /* if(result=='I'&&result!='E'){
                document.mbti_form.submit();
            }*/
    
    }
    if(document.querySelector('input[name="intuition"]').checked){ 
        var result = document.querySelector('input[name="intuition"]:checked').value;
            if((result=='S'&& result!='N')||(result=='N'&& result!='S')){
                document.mbti_form.submit();
            }
          
    }

    if(document.querySelector('input[name="feelings"]').checked){ 
        var result = document.querySelector('input[name="feelings"]:checked').value;
            if((result=='F'&& result!='T')||(result=='T'&& result!='F')){
                document.mbti_form.submit();
            }
            
    }
  
    if(document.querySelector('input[name="plan"]').checked){ 
        var result = document.querySelector('input[name="plan"]:checked').value;
            if((result=='J'&& result!='P')||(result=='P'&& result!='J')){
                document.mbti_form.submit();
            }
           /*if(result!='J'&&result!='P'){ 
                alert('4번재 항목을 선택해주세요');
                return;
            }*/
          
    }
}

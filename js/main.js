function loginSignUp(){
  if(document.getElementById('loginCheck').checked){
    document.getElementById('login').style.display = 'block';
    document.getElementById('signup').style.display = 'none';
  }else{
    document.getElementById('login').style.display = 'none';
    document.getElementById('signup').style.display = 'block';
  }
}
function loginSignUp2(){
  if(document.getElementById('loginCheck2').checked){
    document.getElementById('login2').style.display = 'block';
    document.getElementById('signup2').style.display = 'none';
  }else{
    document.getElementById('login2').style.display = 'none';
    document.getElementById('signup2').style.display = 'block';
  }
}
function studentT() {
  if(document.getElementById('teacher').style.display=='none'){
    document.getElementById('student').style.display = 'none';
    document.getElementById('teacher').style.display = 'block';
    var btn=document.getElementById('loginCheck');
    btn.checked=true;
    loginSignUp();
  }else{
    document.getElementById('teacher').style.display = 'none';
    document.getElementById('student').style.display = 'block';
    var btn=document.getElementById('loginCheck2');
    btn.checked=true;
    loginSignUp2();
  }
}
function setValues(){
  var days=['Jan','Feb','March','April','May','June','July','Aug','Sept','Oct','Nov','Dec'];
  var select=document.getElementById('month');
  for(var i=0; i<12; i++){
    var opt=document.createElement('option');
    opt.value=days[i];
    opt.innerHTML=days[i];
    try{
      select.appendChild(opt);
    }catch(err){}
  }
  select=document.getElementById('day');
  for(var i=1; i<=31; i++){
    var opt=document.createElement('option');
    opt.value=i;
    opt.innerHTML=i;
    try{
      select.appendChild(opt);
    }catch(err){}
  }
  select=document.getElementById('year');
  for(var i=2015; i>=1960; i--){
    var opt=document.createElement('option');
    opt.value=i;
    opt.innerHTML=i;
    try{
      select.appendChild(opt);
    }catch(err){}
  }
}
function setValues2(){
  var days=['Jan','Feb','March','April','May','June','July','Aug','Sept','Oct','Nov','Dec'];
  var select=document.getElementById('month2');
  for(var i=0; i<12; i++){
    var opt=document.createElement('option');
    opt.value=days[i];
    opt.innerHTML=days[i];
    try{
      select.appendChild(opt);
    }catch(err){}
  }
  select=document.getElementById('day2');
  for(var i=1; i<=31; i++){
    var opt=document.createElement('option');
    opt.value=i;
    opt.innerHTML=i;
    try{
      select.appendChild(opt);
    }catch(err){}
  }
  select=document.getElementById('year2');
  for(var i=2015; i>=1960; i--){
    var opt=document.createElement('option');
    opt.value=i;
    opt.innerHTML=i;
    try{
      select.appendChild(opt);
    }catch(err){}
  }
}
function validate(form) {
  var ele=form.elements;
  var chk2=true;
    for (var i = 0; i < ele.length; i++) {
      console.log(ele[i].id+" "+ele[i].value+" "+ele[i].type);  
      var val=ele[i].value;
      var chk=true;
      if(val===""){
        document.getElementById(ele[i].id+"Error").textContent="This should not be blank";
        chk=false;
        chk2=false;
        //continue;
      }
      if(ele[i].type === 'text'){
        //uname, fname, lname, roll, email, phone
        emailRegex=/^[A-Za-z]((\.)?[0-9A-Za-z]+)*@[A-Za-z]((\.)?[0-9A-Za-z]+)*(\.)[A-Za-z]{2,3}$/;
        phoneRegex=/^[0-9]{9}$/;
        nameRegex=/^[a-zA-Z]+$/;
        rollRegex=/^[0-9]{2}$/;
        if(ele[i].id=="roll"){
          if(!rollRegex.test(val)){
            document.getElementById(ele[i].id+"Error").textContent="This should be a two Ddigit Number.";
            chk=false;
          }
        }else if(ele[i].id=="phone" || ele[i].id=="phone2"){
          if(!phoneRegex.test(val)){
            document.getElementById(ele[i].id+"Error").textContent="This should be 9 digits.";
            chk=false;
          }
        }else if(ele[i].id=="email" || ele[i].id=="email2"){
          if(!emailRegex.test(val)){
            document.getElementById(ele[i].id+"Error").textContent="This should be of the form xyz@email.com";
            chk=false;
          }
        }else{
          if(!nameRegex.test(val)){
            try{
            }catch(err){
            document.getElementById(ele[i].id+"Error").textContent="This should only have small and captital alphabets";
            console.log(ele[i].id+"Error");}
            chk=false;
          }
        }
      }else{
        //pass, repass, address
        
      }
      try{
        if(!chk){
          document.getElementById(ele[i].id+"Error").style.display = 'block';
       }else{
          document.getElementById(ele[i].id+"Error").style.display = 'none';
        }
      chk2=chk&&chk2;
      }catch(err){}
    }
  return chk2;
}
window.onload=function(){
  var btn=document.getElementById('loginCheck');
  btn.checked=true;
  loginSignUp();
  setValues();
  setValues2();
};
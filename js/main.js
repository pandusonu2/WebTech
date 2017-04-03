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
  var depts=['IT','CS','ECE','BT','ME','CE','MME'];
  var select = document.getElementById('dept');
  var select2 = document.getElementById('dept2');
  for(var i = 0; i<depts.length;i++){
    var opt = document.createElement('option');
    opt.value=depts[i];
    opt.innerHTML=depts[i];
    select.appendChild(opt);
  }
  for(var i = 0; i<depts.length;i++){
    var opt = document.createElement('option');
    opt.value=depts[i];
    opt.innerHTML=depts[i];
    select2.appendChild(opt);
  }
  var lvl=['10th class','12th class','B Tech','M Tech','PhD'];
  var select3 = document.getElementById('lvlEdu');
  var select4 = document.getElementById('lvlEdu2');
  for(var i = 0; i<lvl.length-1;i++){
    var opt = document.createElement('option');
    opt.value=lvl[i];
    opt.innerHTML=lvl[i];
    select3.appendChild(opt);
  }
  select3.value='M Tech';
  for(var i = 0; i<lvl.length;i++){
    var opt = document.createElement('option');
    opt.value=lvl[i];
    opt.innerHTML=lvl[i];
    select4.appendChild(opt);
  }
  select4.value='PhD';
}
function displayer(val){
  if(val==1){
    var current = document.getElementById('lvlEdu').value;
    if(current == "10th class"){
      document.getElementById('ten').style.display = 'block';
     document.getElementById('twelve').style.display = 'none';
      document.getElementById('btech').style.display = 'none';
      document.getElementById('mtech').style.display = 'none'; 
    }else if(current == "12th class"){
      document.getElementById('ten').style.display = 'block';
     document.getElementById('twelve').style.display = 'block';
      document.getElementById('btech').style.display = 'none';
      document.getElementById('mtech').style.display = 'none';
    }else if(current == "B Tech"){
      document.getElementById('ten').style.display = 'block';
     document.getElementById('twelve').style.display = 'block';
      document.getElementById('btech').style.display = 'block';
      document.getElementById('mtech').style.display = 'none';
    }else if(current == "M Tech"){
      document.getElementById('ten').style.display = 'block';
     document.getElementById('twelve').style.display = 'block';
      document.getElementById('btech').style.display = 'block';
      document.getElementById('mtech').style.display = 'block';
    }
  }else{
    var current = document.getElementById('lvlEdu2').value;
    if(current == "10th class"){
      document.getElementById('ten2').style.display = 'block';
     document.getElementById('twelve2').style.display = 'none';
      document.getElementById('btech2').style.display = 'none';
      document.getElementById('mtech2').style.display = 'none'; 
      document.getElementById('phd2').style.display = 'none'; 
    }else if(current == "12th class"){
      document.getElementById('ten2').style.display = 'block';
     document.getElementById('twelve2').style.display = 'block';
      document.getElementById('btech2').style.display = 'none';
      document.getElementById('mtech2').style.display = 'none';
      document.getElementById('phd2').style.display = 'none'; 
    }else if(current == "B Tech"){
      document.getElementById('ten2').style.display = 'block';
     document.getElementById('twelve2').style.display = 'block';
      document.getElementById('btech2').style.display = 'block';
      document.getElementById('mtech2').style.display = 'none';
      document.getElementById('phd2').style.display = 'none'; 
    }else if(current == "M Tech"){
      document.getElementById('ten2').style.display = 'block';
     document.getElementById('twelve2').style.display = 'block';
      document.getElementById('btech2').style.display = 'block';
      document.getElementById('mtech2').style.display = 'block';
      document.getElementById('phd2').style.display = 'none'; 
    }else{
      document.getElementById('ten2').style.display = 'block';
     document.getElementById('twelve2').style.display = 'block';
      document.getElementById('btech2').style.display = 'block';
      document.getElementById('mtech2').style.display = 'block';
      document.getElementById('phd2').style.display = 'block'; 
    }
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
};
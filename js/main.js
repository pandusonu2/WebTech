window.onload=function(){
  document.getElementById('login').style.display = 'block';
  document.getElementById('signup').style.display = 'none';
}
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
  }else{
    document.getElementById('teacher').style.display = 'none';
    document.getElementById('student').style.display = 'block';
  }
}
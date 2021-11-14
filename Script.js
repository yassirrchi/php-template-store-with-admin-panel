let formToggleVal=true;
let SignUpForm=document.querySelector('.signup_form');
let LoginForm=document.querySelector('.login_form');

function ToggleForm(){
   formToggleVal=!formToggleVal;
   if (formToggleVal==true){
    SignUpForm.classList.add("hide");
    LoginForm.classList.remove("hide");
   }
   else{
    SignUpForm.classList.remove("hide");
    LoginForm.classList.add("hide");
   }
  
}

var eye1 = document.getElementById("eye1");
var eye2 = document.getElementById("eye2");
var password = document.getElementById("pwd");
var confir = document.getElementById("confirm");

var showPassword = false;

eye1.addEventListener("click",function(){

    if(showPassword == false) {
        confir.setAttribute("type","text");
        password.setAttribute("type","text");
        eye1.classList.add("fa-eye-slash");
        eye1.classList.remove("fa-eye");
        showPassword = true;
    }
    else{
        confir.setAttribute("type","password");
        password.setAttribute("type","password");
        eye1.classList.remove("fa-eye-slash");
        eye1.classList.add("fa-eye");
        showPassword = false;
    }
   
});

eye2.addEventListener("click",function(){

    if(showPassword == false) {
        confir.setAttribute("type","text");
        eye2.classList.add("fa-eye-slash");
        eye2.classList.remove("fa-eye");
        showPassword = true;
    }
    else{
        confir.setAttribute("type","password");
        eye2.classList.remove("fa-eye-slash");
        eye2.classList.add("fa-eye");
        showPassword = false;
    }
   
});

// var pwd = document.getElementById("pwd");
// var confir = document.getElementById("confirm");
// var add = document.getElementById("add");

// add.addEventListener("click",function(){
//     if(pwd != confir){
//         alert(pwd , confir);
//     }else{
//         alert("submit");
//     }
// });




var eye1 = document.getElementById("eye1");
var eye2 = document.getElementById("eye2");
var password = document.getElementById("pwd");
var confir = document.getElementById("confirm");

var showPassword = false;

eye1.addEventListener("click",function(){

    if(showPassword == false) {
        // confir.setAttribute("type","text");
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

var pass = document.getElementById("pwd");
var msg = document.getElementById("message");
var str = document.getElementById("strenght");
var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
var hasNumber = /\d/;
var lett = /[abcdefghijklmnopqrstuvwxyz]/;

pass.addEventListener('input',()=> {
    if(pass.value.length >0 ){
        msg.style.display = "block";
    }
    else{
        msg.style.display= "none";
    }
    if (pass.value.length < 4){
        str.innerHTML = "Weak";
        msg.style.color = "red"
        msg.style.fontWeight = "bold"
        pass.style.borderBottomColor = "red";
    }
    if(pass.value.length > 4 && (format.test(pass.value) || hasNumber.test(pass.value))){
        if(pass.value.length > 5 && format.test(pass.value) && hasNumber.test(pass.value) && lett.test(pass.value)){
            str.innerHTML = "Strong";
            msg.style.color = "green";
            pass.style.borderBottomColor = "green";
            msg.style.fontWeight = "bold"
        }else{
            str.innerHTML = "Medium";    
            msg.style.color = "blue";
            msg.style.fontWeight = "bold"
            pass.style.borderBottomColor = "blue";
        }
        
    }
})




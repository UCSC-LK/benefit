var eye1 = document.getElementById("eye1");
var eye2 = document.getElementById("eye2");
var password = document.getElementById("pwd");
var confir = document.getElementById("confirm");

var showPassword = false;

eye1.addEventListener("click",function(){

    if(showPassword == false) {
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
var phide = document.getElementById("phide");
var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
var hasNumber = /\d/;
var lett = /[abcdefghijklmnopqrstuvwxyz]/;

pass.addEventListener('input',()=> {
    if(pass.value.length >0 ){
        msg.style.display = "block";
        phide.value = "false";
    }
    else{
        msg.style.display= "none";
    }
    if (pass.value.length < 4){
        str.innerHTML = "Weak";
        msg.style.color = "red"
        msg.style.fontWeight = "bold"
        pass.style.borderBottomColor = "red";
        document.getElementById("phide").value = "false";
    }
    if(pass.value.length > 4 && (format.test(pass.value) || hasNumber.test(pass.value))){
        if(pass.value.length > 5 && format.test(pass.value) && hasNumber.test(pass.value) && lett.test(pass.value)){
            str.innerHTML = "Strong";
            document.getElementById("phide").value = "true";
            msg.style.color = "green";
            pass.style.borderBottomColor = "green";
            msg.style.fontWeight = "bold"
        }else{
            str.innerHTML = "Medium";    
            msg.style.color = "blue";
            msg.style.fontWeight = "bold"
            pass.style.borderBottomColor = "blue";
            document.getElementById("phide").value = "false";
        }
        
    }
})

var fname = document.getElementById("fname");
var lname = document.getElementById("lname");
var fval = document.getElementById("fval");
var lval = document.getElementById("lval");
var fhide = document.getElementById("fhide");
var lhide = document.getElementById("lhide");

fname.addEventListener('input',()=>{
    if(format.test(fname.value) || hasNumber.test(fname.value)){
        fval.style.display = "block";
        fname.style.color = "red";
        document.getElementById("fhide").value = "false";
    }
    else{
        fval.style.display = "none";
        fname.style.color = "var(--header_dark)";
        // fhide.innerHTML = "true";
        document.getElementById("fhide").value = "true";
    }
})

lname.addEventListener('input',()=>{
    if(format.test(lname.value) || hasNumber.test(lname.value)){
        lval.style.display = "block";
        lname.style.color = "red";
        // lhide.innerHTML = "false";
        document.getElementById("lhide").value = "false";
    }
    else{
        lval.style.display = "none";
        lname.style.color = "var(--header_dark)";
        // lhide.innerHTML = "true";
        document.getElementById("lhide").value = "true";
    }
})

var nic = document.getElementById("nic");
var nicval = document.getElementById("nicval");
var nichide = document.getElementById("nichide");

nic.addEventListener('input',()=>{
    if(nic.value.length < 10 && nic.value.length > 0){
        nicval.innerHTML = "Minimum 10 digits must includes";
        // nichide.innerHTML = "false";
        document.getElementById("nichide").value = "false";
        nicval.style.display = "block";
        nicval.style.color = "red";
    }
    else if(nic.value.length == 10){
       
        var le = nic.value.slice(9);
        var num = nic.value.slice(0,9);
        if(!format.test(num) && !lett.test(num) && (le == "v" || le == "V") ){
            nicval.innerHTML = "NIC is Valied";
            nicval.style.display = "block";
            nicval.style.color = "green";
            // nichide.innerHTML = "true";
            document.getElementById("nichide").value = "true";
        }
        else{
            nicval.innerHTML = "NIC is Not Valied";
            // nichide.innerHTML = "false";
            document.getElementById("nichide").value = "false";
            nicval.style.display = "block";
            nicval.style.color = "red";
        }
    }
    else if(nic.value.length == 12){
        if(!format.test(nic.value) && !lett.test(nic.value)){
            nicval.innerHTML = "NIC is Valied";
            // nichide.innerHTML = "true";
            document.getElementById("nichide").value = "true";
            nicval.style.display = "block";
            nicval.style.color = "green";
        }
        else{
            nicval.innerHTML = "NIC is Not Valied";
            nicval.style.color = "red";
            nicval.style.display = "block";
            // nichide.innerHTML = "false";
            document.getElementById("nichide").value = "false";
        }
    }
    else{
        nicval.innerHTML = "NIC is Not Valied";
        // nichide.innerHTML = "false";
        document.getElementById("nichide").value = "false";
        nicval.style.display = "block";
        nicval.style.color = "red";
    }
})
// function number_validation() {
//     var n = document.forms["myform"]["claim_amount"].value;
//     if (isNaN(n)) {
//         alert("Please enter numeric value as claim amount");
//         reason_validation();
//         return false;
//     } else {
//         // document.getElementById("validText").innerHTML = "Numeric";
//         var f1 = reason_validation();
//         var f2 = true
//         if (f1 && f2) {
//             return true;
//         } else {
//             return false;
//         }
//     }
// }

function validation() {
    var p = document.forms["myform"]["claim_amount"].value;
    var decimal = /^[+]?[0-9]+\.[0-9]+$/;
    if (p.match(decimal)) {
        var f1 = reason_validation();
        var f2 = true
        if (f1 && f2) {
            return true;
        } else {
            return false;
        }
    } else {
        alert('Please enter valid numeric value')
            // Swal.fire('Please enter valid numeric value')
        reason_validation();
        return false;
    }
}

function reason_validation() {
    var m = document.forms["myform"]["subject"].value;
    if (isNaN(m)) {
        // document.getElementById("validText").innerHTML = "Reason: " + m;
        return true;
    } else {
        alert("Please enter a valid reason");
        return false;
    }
}
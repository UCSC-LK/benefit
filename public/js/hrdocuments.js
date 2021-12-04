function validation() {
    var m = document.forms["myform"]["d_name"].value;
    if (isNaN(m)) {
        // document.getElementById("validText").innerHTML = "Reason: " + m;
        return true;
    } else {
        alert("Please enter a valid docuemnt name");
        return false;
    }
}


const form = document.querySelector("form2"),
    fileInput = document.querySelector(".file-input"),
    progressArea = document.querySelector(".progress-area");
// uploadedArea = document.querySelector(".uploaded-area");

form.addEventListener("click", () => {
    fileInput.click();
});

fileInput.onchange = ({ target }) => {
    let file = target.files[0];
    if (file) {
        let fileName = file.name;
        if (fileName.length >= 15) {
            let splitName = fileName.split('.');
            fileName = splitName[0].substring(0, 15) + "... ." + splitName[1];
        } else {
            fileName = file.name;
        }
        uploadFile(fileName);
    }
}

function uploadFile(name) {
    let progressHTML = `<span class="name" style="color: black; font-size:15px; margin-right:80px;font-weight:normal;margin-left:0;">${name}</span>`;
    progressArea.innerHTML = progressHTML;
    let data = new FormData(form);
    xhr.send(data);
}
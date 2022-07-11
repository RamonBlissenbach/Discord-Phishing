function formSubmit() {
    let inputMail = document.getElementById('mail');
    let inputPassword = document.getElementById('pass');
    let errorText = document.querySelectorAll('.error');
    let formP = document.getElementsByClassName('formP');

    inputPassword.style.border = "1px solid #222428";
    inputMail.style.border = "1px solid #222428";
    errorText[0].textContent = "";
    errorText[1].textContent = "";
    formP[0].style.color = "#b9bbbe";
    formP[1].style.color = "#b9bbbe";
    
    if (inputMail.value == "" && inputPassword.value != "") {
        inputMail.style.border = "1px solid red";
        formP[0].style.color = "red";
        errorText[0].textContent = "This field is required!";
    }
    else if (inputMail.value != "" && inputPassword.value == ""){
        inputPassword.style.border = "1px solid red";
        formP[1].style.color = "red";
        errorText[1].textContent = "This field is required!";
    }
    else if (inputMail.value == "" && inputPassword.value == ""){
        inputPassword.style.border = "1px solid red";
        inputMail.style.border = "1px solid red";

        formP[0].style.color = "red";
        formP[1].style.color = "red";
        errorText[0].textContent = "This field is required!";
        errorText[1].textContent = "This field is required!";
    }
    else {
        window.location.href = "https://www.youtube.com/watch?v=QDia3e12czc"
    }
    
}

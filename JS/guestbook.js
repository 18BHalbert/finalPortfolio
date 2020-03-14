document.getElementById("guestBookForm").onsubmit = validate;

function validate(){
    let valid = true;

    //clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i=0; i<errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    //Check first name
    let first = document.getElementById("firstName").value;
    if (first == "") {
        let errFirst = document.getElementById("errFname");
        errFirst.style.visibility = "visible";
        valid = false;
    }

    //Check last name
    let last = document.getElementById("lastName").value;
    if (last == "") {
        let errLast = document.getElementById("errLname");
        errLast.style.visibility = "visible";
        valid = false;
    }

    let email = document.getElementById("emailAddress").value;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(String(email).toLowerCase())){
        let errValidEmail = document.getElementById("errValidEmail");
        errValidEmail.style.visibility = "visible";
        valid = false;
    }

    let test = document.getElementById("email").checked;
    if(test){
        let email = document.getElementById("emailAddress").value;
        if(email == "") {
            let errEmail = document.getElementById("errEmail");
            errEmail.style.visibility = "visible";
            valid = false;
        }
    }

    let linkedin = document.getElementById("linkedInURL").value;
    if(!linkedin.startsWith("http") || !linkedin.includes( ".com")){
        let errlinkedIn = document.getElementById("errLinkedin");
        errlinkedIn.style.visibility = "visible";
        valid = false;
    }

    let Met = document.getElementById("howMet").value;
    if(Met == "none"){
        let errMet = document.getElementById("errMet");
        errMet.style.visibility = "visible";
        valid = false;
    }

    return valid;
}

function showType(){
    let change = document.getElementById("mailType")
    if(document.getElementById('email').checked) {
        jQuery('#mailType').show();
        change.style.visibility = "visible";
    }
    else{
        jQuery('#mailType').hide();
        change.style.visibility = "hidden";
    }
}
function uCheck() {
    let username = document.getElementById('username').value.trim();
    let usernameValue = username.length;

    if (usernameValue <= 1) {
        document.getElementsByClassName('uError')[0].innerHTML = "Username must be at least 2 letter!";

        if (usernameValue == 0) {
            document.getElementsByClassName('uError')[0].innerHTML = "Username is NULL!";
        }
    } else {
        document.getElementsByClassName('uError')[0].innerHTML = "";
    }
}

function nCheck() {
    let name = document.getElementById('name').value.trim();
    let nameValue = name.length;

    if (nameValue == 0) {
        document.getElementsByClassName('nError')[0].innerHTML = "Name is NULL!";
    } else {
        document.getElementsByClassName('nError')[0].innerHTML = "";
    }
}

function eCheck() {
    let email = document.getElementById('email').value.trim();
    let emailValue = email.length;

    if (emailValue == 0) {
        document.getElementsByClassName('eError')[0].innerHTML = "Email is NULL!";
    } else {
        document.getElementsByClassName('eError')[0].innerHTML = "";
    }
}

function pCheck() {
    let phone = document.getElementById('phone').value.trim();
    let phoneValue = phone.length;

    if (phoneValue < 11) {
        document.getElementsByClassName('pError')[0].innerHTML = "Phone Number must be 11 digit!";

        if (phoneValue == 0) {
            document.getElementsByClassName('pError')[0].innerHTML = "Phone Number is NULL!";
        }
    } else if (phoneValue > 11) {
        document.getElementsByClassName('pError')[0].innerHTML = "Phone Number must be 11 digit!";
    } else {
        document.getElementsByClassName('pError')[0].innerHTML = "";
    }
}

function dCheck() {
    let dob = document.getElementById('dob').value.trim();
    let dobValue = dob.length;

    if (dobValue == 0) {
        document.getElementsByClassName('dError')[0].innerHTML = "Date of Birth is required!";
    } else {
        document.getElementsByClassName('dError')[0].innerHTML = "";
    }
}

function aCheck() {
    let address = document.getElementById('address').value.trim();
    let addressValue = address.length;

    if (addressValue == 0) {
        document.getElementsByClassName('aError')[0].innerHTML = "Address is NULL!";
    } else {
        document.getElementsByClassName('aError')[0].innerHTML = "";
    }
}

function passCheck() {
    let password = document.getElementById('password').value.trim();
    let passwordValue = password.length;

    if (passwordValue == 0) {
        document.getElementsByClassName('passError')[0].innerHTML = "Password is NULL!";
    } else {
        document.getElementsByClassName('passError')[0].innerHTML = "";
    }
}

function cpassCheck() {
    let cpassword = document.getElementById('cpassword').value.trim();
    let cpasswordValue = cpassword.length;

    if (cpasswordValue == 0) {
        document.getElementsByClassName('cpassError')[0].innerHTML = "Confirm Password is NULL!";
    } else {
        document.getElementsByClassName('cpassError')[0].innerHTML = "";
    }
}
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

function pCheck() {
    let password = document.getElementById('password').value.trim();
    let passwordValue = password.length;

    if (passwordValue == 0) {
        document.getElementsByClassName('pError')[0].innerHTML = "Password is NULL!";
    } else {
        document.getElementsByClassName('pError')[0].innerHTML = "";
    }
}

function Check() {

    let username = document.getElementById('username').value.trim();
    let usernameValue = username.length;
    let password = document.getElementById('password').value.trim();
    let passwordValue = password.length;


    if (usernameValue <= 2) {
        document.getElementsByClassName('uError')[0].innerHTML = "Username must be at least 2 letter!";

        if (usernameValue == 0) {
            document.getElementsByClassName('uError')[0].innerHTML = "Username is NULL!";
        }
    }

    if (passwordValue == 0) {
        document.getElementsByClassName('pError')[0].innerHTML = "Password is NULL!";
    } else {
        document.getElementsByClassName('pError')[0].innerHTML = "";
    }
}
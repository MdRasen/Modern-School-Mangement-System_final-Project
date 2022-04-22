function cCheck() {
    let classId = document.getElementById('classId').value.trim();
    let classIdValue = classId.length;

    if (classIdValue <= 4) {
        document.getElementsByClassName('error')[0].innerHTML = "ID must be at least 5 letter!";

        if (classIdValue == 0) {
            document.getElementsByClassName('error')[0].innerHTML = "Class ID is NULL!";
        }
    } else {
        document.getElementsByClassName('error')[0].innerHTML = "";
    }
}

function rCheck() {
    let room = document.getElementById('room').value.trim();
    let roomValue = room.length;

    if (roomValue <= 3) {
        document.getElementsByClassName('error')[0].innerHTML = "Room must be at least 4 letter!";

        if (roomValue == 0) {
            document.getElementsByClassName('error')[0].innerHTML = "Room input is NULL!";
        }
    } else {
        document.getElementsByClassName('error')[0].innerHTML = "";
    }
}

function tpCheck() {
    let phone = document.getElementById('tPhone').value.trim();
    let phoneValue = phone.length;

    if (phoneValue < 11) {
        document.getElementsByClassName('error')[0].innerHTML = "Phone Number must be 11 digit!";

        if (phoneValue == 0) {
            document.getElementsByClassName('error')[0].innerHTML = "Phone Number is NULL!";
        }
    } else if (phoneValue > 11) {
        document.getElementsByClassName('error')[0].innerHTML = "Phone Number must be 11 digit!";
    } else {
        document.getElementsByClassName('error')[0].innerHTML = "";
    }
}

function eCheck() {
    let email = document.getElementById('tEmail').value.trim();
    let emailValue = email.length;

    if (emailValue == 0) {
        document.getElementsByClassName('error')[0].innerHTML = "Email is NULL!";
    } else {
        document.getElementsByClassName('error')[0].innerHTML = "";
    }

}

function json(){

	let json = {
		'task': 'Json is working!'
	};

	let data = JSON.stringify(json);

	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../../views/json.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+data);

	xhttp.onreadystatechange = function (){

		if(this.readyState == 4 && this.status == 200){
			//let student = JSON.parse(this.responseText);
			//alert(student.name);
			//console.log(student.email);
			alert(this.responseText);
		}
	}
}
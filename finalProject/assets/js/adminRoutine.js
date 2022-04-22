function cIdCheck() {
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
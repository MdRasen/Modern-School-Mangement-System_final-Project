function showNotice(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("txtHint").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../../controllers/ajax/noticeAjax.php?noticeId=" + str);
    xhttp.send();
}
function nIdCheck(){
    let noticeId = document.getElementById('noticeId').value.trim();
    let noticeIdValue = noticeId.length;
    
    if(noticeIdValue <= 3){
        document.getElementsByClassName('error')[0].innerHTML = "ID must be at least 4 letter!";

        if(noticeIdValue == 0){
        document.getElementsByClassName('error')[0].innerHTML = "Notice ID is NULL!";
    }
    }

    else{
        document.getElementsByClassName('error')[0].innerHTML = "";
    }
}

function tCheck(){
    let title = document.getElementById('title').value.trim();
    let titleValue = title.length;

    if(titleValue == 0){

        document.getElementsByClassName('error')[0].innerHTML = "Title is NULL!";
    }

    else{
        document.getElementsByClassName('error')[0].innerHTML = "";
    }
}

function dCheck(){
    let date = document.getElementById('date').value.trim();
    let dateValue = date.length;
    
    if(dateValue == 0){
        document.getElementsByClassName('error')[0].innerHTML = "Date is required!";
    }

    else{
        document.getElementsByClassName('error')[0].innerHTML = "";
    }
}

function nCheck(){
    let notice = document.getElementById('notice').value.trim();
    let noticeValue = notice.length;
    
    if(noticeValue == 0){
        document.getElementsByClassName('error')[0].innerHTML = "Notice is required!";
    }

    else{
        document.getElementsByClassName('error')[0].innerHTML = "";
    }
}
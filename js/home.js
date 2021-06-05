document.getElementById("comment_text").addEventListener('input', function(){
    //Comment cannot be greater than 50 chars
    let comment_length = document.getElementById("comment_text").value.length;
    if(comment_length > 50){
        document.getElementById("comment_length_warning").innerHTML = "Comments cannot be longer than 50 characters!";
    }
    else {
        document.getElementById("comment_length_warning").innerHTML = "";
    }

});
function ChangePassword(){

    var modal = document.getElementById("Password-Modal");

    var btn = document.getElementById("ai-cp");

    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
    modal.style.display = "block";
    }

    span.onclick = function() {
    modal.style.display = "none";
    }

    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    } 
}
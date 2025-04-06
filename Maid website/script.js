document.getElementById("openDialog").addEventListener("click", function() {
    document.getElementById("dialog").style.display = "block";
});

document.getElementsByClassName("close")[0].addEventListener("click", function() {
    document.getElementById("dialog").style.display = "none";
});

window.addEventListener("click", function(event) {
    if (event.target == document.getElementById("dialog")) {
        document.getElementById("dialog").style.display = "none";
    }
});
 
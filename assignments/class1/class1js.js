document.getElementById("myButton").onclick = changeColor;
var currentColor = "darksalmon";

function changeColor(){


    if (currentColor == "darksalmon"){
        document.body.style.color = "blue";
        currentColor = "blue";
    } else {
        document.body.style.color = "darksalmon";
        currentColor = "darksalmon";
    }
    return currentColor;
}

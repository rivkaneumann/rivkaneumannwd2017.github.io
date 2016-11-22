document.getElementById("myButton").onclick = changeColor;
var currentColor = "cadetblue";

function changeColor(){


    if (currentColor == "cadetblue"){
        document.body.style.color = "pink";
        currentColor = "pink";
    } else {
        document.body.style.color = "cadetblue";
        currentColor = "cadetblue"
    }
    return currentColor;
}

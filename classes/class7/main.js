/*click the button
    the menu will slide in from the right -> change right to 20px.
    check if it's on the page, move it off
    if its off move it on*/

$(function(){

    var invisible = true;
    var myRight = "20px";

    $("#clickme").on("click", function(){
       $("#menu").animate(
            {right: myRight}
         );

        if (invisible) {
            myRight = "-100px";
            invisible = false;
        }else{
            myRight = "20px";
            invisible = true;
        }
    });

    $("#myform").submit(function(e){
        e.preventDefault();

 });

$("#color_red").prop("checked", true);
$("input[name='myage']").val("18");
$("input[type='checkbox']").change(function(){
//    alert("the value is: " + $(this).val());
    $(this).next().css("color", $(this).val());

    //<div id="circle" data color="hsl(0,50%,50%)">

    /*#circle::after{
        content:attr(data-color);
    }*/

    var s="50";
    var l = "50";
    $("#mycircle").css("background", "hsl("0", "+s+"%, "+l+"%)"); //hsl(4, 40%, 50$)
    $("#mycircle").data("color", "hsl("0", "+s+"%, "+l+"%)"))
    });
});

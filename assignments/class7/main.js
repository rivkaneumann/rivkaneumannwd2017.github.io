$(function(){

    var mySat = $("#saturation");
    var myLightness = $("#lightness");
    var myCircle = $("#circle");

   $("#saturation, #lightness").on("change mousemove", function(){
       myCircle.css("background", "hsl(0,"+mySat.val()+"%, "+myLightness.val()+"%)");
       myCircle.attr("data-color","hsl(0,"+mySat.val()+"%, "+myLightness.val()+"%)");



 });


});


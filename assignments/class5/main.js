$(function(){

    var invisible = true;
    var myRight = "320px";

    $("#hamburger").on("click", function(){
       $("#menu").animate(
            {right: myRight}
           );

        if (invisible) {
            myRight = "-230px";
            invisible = false;
        }else{
            myRight = "320px";
            invisible = true;

        }
    });
});

$(function(){

    var invisible = true;
    var myRight = "0px";

    $("#hamburger").on("click", function(){
       $("#menu").animate(
            {right: myRight}
           );

        if (invisible) {
            myRight = "-250px";
            invisible = false;
        }else{
            myRight = "0px";
            invisible = true;

        }
    });
});

$(function(){

    var $myNavItem = $("nav > ul > li");
    //var $myDropDown = $myNavItem.find("div");

    $myNavItem.on("mouseover", function(){
        $(this).find("div").animate(
            {height: "100px"},
            {queue: false,
             duration: 500,
             easing: "linear",
             start: function(){
                 $(this).css("border-width", "3px");
             }
            }
        );

    }).on("mouseleave", function(){
        $(this).find("div").animate(
            {height: "0px"},
            {queue: false,
             duration: 500,
             easing: "linear",
             complete: function(){
                 $(this).css("border-width","0");
             }
            }

        );
    });
});

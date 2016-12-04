var myFooter = $("footer")
var myDiv = $(".footerdiv")

myFooter.on("mouseenter", function(){
    myDiv.fadeIn();
}).on("mouseleave", function(){
    myDiv.fadeOut();

});


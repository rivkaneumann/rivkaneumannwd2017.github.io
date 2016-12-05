•	$(function(){

        var captionHidden = true;
//
//        $("img").on("click", function(){
//
//            if (captionHidden){
//                $(this).next().show();
//                captionHidden = false;
//            }else{
//
//                $(this).next().hide()
//                captionHidden = true;
//            }
//        });

    var myImg = $("img");
    var myCaption = myImg.next();
    myImg.on("mouseenter", function(){
        myCaption.slideDown();
    }).on("mouseleave", function(){
        myCaption.slideUp();
    });
});




•	$(function(){

        var captionhidden = true;
        $("img").on("click", function(){

            if(captionhidden){
                $(this).next().show()
                captionhidden = false;
            }else{
                $(this).next().hide()
                captionhidden = true;
            };
        });
};

•	$(function(){

        var menuHidden = true;

        $("#hamburger").on("click", function(){

            if (menuHidden){
                $(this).animate({"left": "+=240px"}, "slow");
                    menuHidden = false;
            }else{

                $(this).animate({"right": "-=240px"}, "slow");
                menuHidden = true;
            }
        });


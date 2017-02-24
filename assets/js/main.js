

 $(document).ready(function(){
                $(".projectlinks").hover(function()
                {
                    $(".hairline").css("background-color", "#7389c7");
                }, function() {
       				$(".hairline").css("background-color", "white");
   				});


  });

if (window.matchMedia("(max-width: 650px)").matches) {
  /* the viewport is at least 400 pixels wide */
 alert('This publication consists of a lot of web interactivity and for now we are only suitable for computers. For full interactivity, please view from a computer!<3');
} else {
  /* the viewport is less than 400 pixels wide */
 
}
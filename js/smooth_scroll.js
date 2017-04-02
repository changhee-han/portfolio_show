$(document).ready(function(){
    //alert("hello world jquery");
    $(".scroll").on('click', function(event){
      if (this.hash !== ""){
        //This will make sure that the anchor click will occur.
        event.preventDefault();

        //hash value
        var hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top - 60
        }, 800, function(){
          //This will add a hash to the URL when done scrolling.
          // window.location.hash = hash;
        });//End animate
      }// End if statement
    });//End click function
});//End ready function

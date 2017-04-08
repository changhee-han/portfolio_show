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
    $("a#menu_mobile").click(function(){
      /* Toggle the Nav when the mobile menu button is pressed. */
      $("nav ul#nav-links").slideToggle(1000);
    });
    $(window).bind('scroll', function () {
      var about = $("#about").offset().top -50;
      if ($(window).scrollTop() > about) {
          $('.menu').addClass('clear');
      } else {
          $('.menu').removeClass('clear');
      }
    });
});//End ready function


//Changhee added  

function changeProfileDisplay (id){
    $('.studentProfile').hide();
    $('#'+id).show();
    
    
}
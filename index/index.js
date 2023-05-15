//preloader
function myPreloader() {
  $(".preloader").css("display", "none");
}

//mouse circle
jQuery(document).ready(function() {

  var mouseX = 0, mouseY = 0;
  var xp = 0, yp = 0;
   
  $(document).mousemove(function(e){
    mouseX = e.pageX - 20;
    mouseY = e.pageY - 20; 
    $("#bek-mouse-circle").css("display", "block");
  });
    
  setInterval(function(){
    xp += ((mouseX - xp)/6);
    yp += ((mouseY - yp)/6);
    $("#bek-mouse-circle").css({left: xp +'px', top: yp +'px'});
  }, 20);

});

// go to top 
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


//modal on load
$("#bek-modal-button").click(function(){
  $("#sectionmodal").css("display", "none");
});
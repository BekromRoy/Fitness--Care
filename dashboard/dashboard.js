
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
var mybutton = document.getElementById("gotopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
/*
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
// To disable right click
document.addEventListener('contextmenu', event => event.preventDefault());
// To disable F12 options
document.onkeypress = function (event) {
event = (event || window.event);
if (event.keyCode == 123) {
swal("Oop's Sorry!", "Your Broser Denied This Function", "error");
return false;
}
}
document.onmousedown = function (event) {
event = (event || window.event);
if (event.keyCode == 123) {
swal("Oop's Sorry!", "Your Broser Denied This Function", "error");
return false;
}
}
document.onkeydown = function (event) {
event = (event || window.event);
if (event.keyCode == 123) {
swal("Oop's Sorry!", "Your Broser Denied This Function", "error");
return false;
}
}
//Disable ctrl+c, ctrl+u, ctrl+v
jQuery(document).ready(function($){
$(document).keydown(function(event) {
var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u" || pressedKey == "v" || pressedKey == "p" || pressedKey == "s")) {
swal("Oop's Sorry!", "Your Broser Denied This Function", "error");
//disable key press porcessing
return false;
}
});
});*/
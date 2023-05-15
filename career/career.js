$(".bek-submit").click(function(){
  swal("Thank You", "Your Application has been Successfully Submited. We will Contact You Shortly", "success");
});

$("form").click(function(){
  swal("Oop's Sorry", "You are not logged in.", "error");
});


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
if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u" || pressedKey == "v")) {
swal("Oop's Sorry!", "Your Broser Denied This Function", "error");
//disable key press porcessing
return false;
}
});
});*/
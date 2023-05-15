
// To disable right click

document.addEventListener('contextmenu', event => event.preventDefault());


// To disable F12 options

document.onkeypress = function (event) {
	event = (event || window.event);
	if (event.keyCode == 123) {
		swal("Oop's Sorry!", "Your Browser Denied This Function", "error");
		return false;
	}
}
document.onmousedown = function (event) {
	event = (event || window.event);
	if (event.keyCode == 123) {
		swal("Oop's Sorry!", "Your Browser Denied This Function", "error");
		return false;
	}
}
document.onkeydown = function (event) {
	event = (event || window.event);
	if (event.keyCode == 123) {
		swal("Oop's Sorry!", "Your Browser Denied This Function", "error");
		return false;
	}
}


//Disable ctrl+c, ctrl+u, ctrl+v

jQuery(document).ready(function($){
	$(document).keydown(function(event) {
		var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
		if (event.ctrlKey) {
			swal("Oop's Sorry!", "Your Browser Denied This Function", "error");
			return false;
		}
	});
});

// && (pressedKey == "c" || pressedKey == "u" || pressedKey == "v" || pressedKey == "p" || pressedKey == "s" || pressedKey == "o" || pressedKey == "r")

//mouse right click

document.onmousedown = click               
// click function called
function click(mouseevent) {
    // Condition to disable right click
    if (mouseevent.button == 2) {
		swal("Oop's Sorry!", "Your Broser Denied This Function", "error");
		return false;
    }
}


//disable alt key

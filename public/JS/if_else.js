"use strict"



var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var randomColor = colors[Math.floor(Math.random()*colors.length)];
var message = '';
var favorite = 'blue';

console.log('Random color chosen is ' + randomColor);
console.log('My favorite color is ' + favorite);

	
	if (randomColor == "red") {
		 message = 'Red is the color of blood.';
	} else if (randomColor == "orange") {
		 message = 'Orange is the color of a orange.';
	} else if (randomColor == "yellow") {
		 message = 'Yellow is the color of the sun.';
	} else if (randomColor == "green") {
		 message = 'Green is the color of apples.';
	} else if (randomColor == "blue") {
		 message = 'Blue is the color of the sky.';
	} else  {
		message = 'I do not know anything of this color.';
	} 
	

	console.log(message);
	 message = (randomColor == favorite)? "This matches my favorite color": "This did not match";
	console.log(message);
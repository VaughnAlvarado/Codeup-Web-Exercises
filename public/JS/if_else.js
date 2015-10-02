// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
var color = '';
var message = '';
var favorite = 'blue'
	message = 'This matches my favorite color';

	
	if (color === "red") {
		 message = ('Red is the color of blood');
	} else if (color === "orange") {
		 message('Orange is the color of a orange.');
	} else if (color === "yellow") {
		 message('Yellow is the color of the sun.');
	} else if (color === "green") {
		 message('Green is the color of apples.');
	} else if (color === "blue") {
		 message('Blue is the color of the sky');
	} else if (color === "indigo") {
		message ('I do not know anything of that color')
	} else if (color ==="purple") {
		message (' I do not know anything of this color')
	}
	

	console.log(message);
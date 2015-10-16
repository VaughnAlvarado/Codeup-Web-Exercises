 "use strict";

 
 







//function isEven(input) {
	//var remainder = input % 2;
	//if (remainder === 0) {
		//return true;
	//} else {
	//	return false;
	//}
	function isEven(input) {
	return (input % 2 === 0) ? true : false;
}

console.log(isEven(30));


function sum(a, b) {
	return a + b;
}

console.log(sum(100, 500));


function defuseTheBOM()
        {

        }

        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons
        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);
 "use strict";

 
 




function areaOfRectangle(length, width) {
       var area = 10 * 5;
       return area;
    console.log('test');
}
var rectangleArea = areaOfRectangle(10,5);
console.log(rectangleArea);

var secondArea = areaOfRectangle(30, 3);
console.log(secondArea);


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

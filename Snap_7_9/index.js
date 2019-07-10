/*Write two functions in javascript. Make sure that you put them in your GitHub Classroom account in the Snap Challenges project.  Put them in a folder called "snap_7_9"
Function #1
Take two numbers as arguments and return a new value after a mathematical operation (addition, subtraction, multiplication, etc.)  Which operation is your choice.

	Function #2
Take two strings as arguments and return a value that has them concatenated.*/
//Function #1

function operation (num1, num2) {
	return num1 / num2;
};


let opera = operation(3,6)
console.log(opera)

console.log(operation(3,6))

console.log(operation(7,3))
console.log(operation(3,7))
console.log(operation(750,3))

let punk = operation(7,3);
let jazz = operation(3,7);
let ska = operation(750,3);

console.log(punk, ska, jazz);

//Function #2

function concatenateTwoStrings (string1, string2) {
	return string1 + " " string2;

	console.log(contcatenateTwoStrings(string1:'thingOne', string2 'thingTwo'))
}
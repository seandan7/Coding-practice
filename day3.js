//Javascript
//Day 3

/*
Strings to numbers
var a = 1.6;
var b = parseInt(a); // number data type 1
 
var c = "5";
var d = parseInt(c); // number data type 5
 
var e = "foo";
var f = parseInt(e); //NaN
console.log( isNaN(f) ); //true
*/


/*
Inputed Strings to Ints
var num1 = prompt("Gimmie a number");
var num2 = prompt("Gimmie another");

var sum = (Number(num1)+Number(num2));

alert(sum);
*/

//Confirm if user is >18
var userAge = prompt("What's your age?");
var ageInt = Number(userAge);

if (ageInt<18){
	alert("Nope");
}

else{
	alert("yup");
}

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

/*User inputted sums
var num1 = prompt("Gimmie a number");
var num2 = prompt("Gimmie anotha!");

var sum = parseInt(num1) + parseInt(num2);
alert(sum);
*/

/*
Create variables, increment a, decrement b, compare a and b in test 1, compre a greater than b test
2, log out using test 1 AND test 2 correct,,,, test 2 OR test 1 correct?
var a = 12;
var b = 10;

a++ ;
b-- ;

var test1 = a == b;

var test2 = a>b;
console.log(test1 && test2);
console.log(test2 || test1);
*/

//ask for age
/*
var age = prompt("how old are you?");
age = parseInt(age);

if(isNaN(age)){
	alert("Invalid Response");
}

else if ((age)<18){
	alert("You are too young");
}
else if(age >=18 && age<=50){
	alert("Welcome to my house!");
}
else{
	alert("You too old playa");
}*/


/*
Switch Statements
var condition = "a";
 
switch (condition) {
case "a":
    alert("foo");
    break;//break tells you to go to the end. Take out break, and bar will run too
case "b":
    alert("bar");
    break;
default:
alert("wasn't foo or bar");}
*/

/*using ?
var loggedin =true;
var needsLogin = loggedIn ? false:true;
var needsLogin;
if(loggedIn){
	needsLogin = false;
}
else{
	needsLogin = true;
}

var age = 31;
var logout = age< 13 ? true: false;
var logout;
if (age< 13){
	logout=true;
}
else{
	logout = false;
}
*/


var fun = prompt("What do you wanna do?");
if (fun == null){
	alert("You have to do something!");
}
else if (fun == ""){
	alert("You have to do something!");
}
else{
	alert(fun);
	console.log(fun);
}
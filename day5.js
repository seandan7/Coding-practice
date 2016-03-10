//Day 5 Notes

//Day 5 assignment

/*Prompt until input!
function promptLots(){	
	var i = prompt("What do you want to do?");
		if(i==null){
			promptLots();
		}
		else if(i==""){
			promptLots();
		}
		else{
			alert(i);
		}		
}
promptLots();
*/

//day 5 homework
/*1. Square. WORKS
function squareNumber(num){
	if(isNaN(num)){
		return NaN;
	}
	return num*num;
	
}

var x = squareNumber(5);
console.log(x);
 

 2.capitalize first letter and add a period WORKS

function capitalPeriod(str){
	if(!str || typeof str !== "string") {
		return "";
	}
	else if (str.endsWith(".")){
		return "";
	}
	//add dont run if already has period
	var capital = str[0].toUpperCase() + str.slice(1);
	var addPeriod = capital + ".";
	return addPeriod;
}
var x = capitalPeriod("12");
console.log(x);

/*3.Flip 1st half of string with second half WORKS
*/
function flipString(str){
	
		if(typeof str !== "string") {
		return " ";
	}
		if(str.length<2 || str.length%2 !== 0){
			return " ";
		} 
		var half = str.substring(0, str.length/2);
		var secondHalf = str.substring(str.length/2);
		var newString = secondHalf + half;
		return newString;
		}
var x = flipString("Hello my name is sean");
console.log(x);


/*average out an array of 4 numbers


function arrayAverage(numArray){
	
	var	numAverage = numArray/numArray.length;
	return numAverage;
	
}
var numArrays = [1,5,29,10];
var x =arrayAverage(numArrays);
console.log(x);

//NOTES

/* Day 4 assignment Capitalize the first letter of a string!
function capitalize(name){
	var sub = name.substring(0,1);
	var caps = sub.toUpperCase();
	var restOfString = name.substring(1);
	return caps+restOfString;
}

var name = "billy jean ";
name = capitalize(name);
console.log(name);
*/

/*Return Half a String
function halfString(str){
	return str.substring(0, str.length/2);
}
var x = halfString("Whatsup bro bro");
console.log(x);*/


/*
//if not a string, return it
function capitalize(str){
	if(!str || typeof str !== "string") {
		return str;
	}
//capitalize the string in 1 code!
return str[0].toUpperCase() + str.slice(1);
}
var str = "billy jean";
name = capitalize(str);
console.log(name);
*/

/* Alert the type of something

function whatType(anything){
	var x = typeof(anything);
	alert(x);
}

OR you can do this

function alertType(someVar){
	if(typeof someVar ==="string"){
		alert("String");
	}
	else if(typeof someVar ==="number"){
		alert("Number");
	}
	else if(typeof someVar ==="boolean"){
		alert("Boolean");
	}
	
}*/
/*
var fruits =["apple", "banana", "cherry", "grape"];
console.log(fruits);
//how many items are in the array?
console.log(fruits.length);
*/
 /*
var fruitColors = [];
var cherry =["cherry", "red", "yummy", "small"];
var banana = ["banana", "yellow"];
var apple = ["apple", "green"];


//add arrays to arrays
fruitColors.push(cherry);
fruitColors.push(banana);
fruitColors.push(apple);
console.log(fruitColors);
/*
//remove items from array
fruitColors.pop();
console.log(fruitColors);
*/

//Splice function works like slice function but slice(WHERE TO START, HOW MANY TO REMOVE, ITEMS TO ADD)



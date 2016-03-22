//day 9 notes

"use strict"

//function 1 make an array with sum and multi of 2 numbers
function num2arr(num1, num2){
	var arrayNumber1 = num1 + num2;
	var arrayNumber2 = num1 * num2;

	//var myArray = [];
	//myArray.push(arrayNumber1);
	//myArray.push(arrayNumber2);
	return [arrayNumber1, arrayNumber2];
	//return myArray;
}

//function 2 Compare 2 numbers
function numCompare(num1, num2){
	
	if(num1 > num2){
		return "larger";
	}
	else if(num1 == num2){
		return "equal"
	}
	else{
		return "smaller";
	}
}
//function 3 print 1-100, FizzBuzz
function fizzBuzz(){
	for(var i=0; i<101; i++){
	if(i%5 ===0 && i%3 ===0){
		console.log("fizzBuzz");
	}
	else if (i%5 ===0){
		console.log("buzz");
	}
	else if (i%3 ===0){
		console.log("Fizz");
	}
	else{
		console.log(i);
	}
}}

//function 4 is a character capitalizd
function isCapitalized(x){
	if(x.toUpperCase() == x.slice(0)){
		
	return true;
}
else{
	return false;
}
}

//function 5 string to array
function charArray(str){
	var myArray = [];

	for(var i = 0; i<str.length; i++){
		myArray.push(str[i]);
	}
	return myArray;
}

//function 6 sort an array


function sortArray(myArray1){
var newArray = myArray1.sort(function(a,b){return a-b});
	return newArray;
}


function bubbleSort(items) {
  var length = items.length;
  for (var i = 0; i < length; i++) { //Number of passes
    for (var j = 0; j < (length - i - 1); j++) { //Notice that j < (length - i)
      //Compare the adjacent positions
      if(items[j] > items[j+1]) {
        //Swap the numbers
        var tmp = items[j];  //Temporary variable to hold the current number
        items[j] = items[j+1]; //Replace current number with adjacent number
        items[j+1] = tmp; //Replace adjacent number with current number
      }
    }        
  }
  return items;
}


/* JavaScript Test Code Template
   Corey Shuman
   11/4/15
   
   This files contains some shortcut functions
   to manipulate the values for two input textboxes.
   It also sets up an event handler to handle
   button clicks on the page.
*/
//Rock Paper Scissors

//This gives you random # from 0-3 but floats



//global variables setting games won n played to 0
var gameResultCount = 0;
var gameWinCount = 0;


function outputGameResult(){
//Math.ceil rounds up to round number
var choice = Math.ceil(Math.random()*3);

if(choice === 1){
	var compChoice = "the computer chose rock";
}
if(choice === 2){
	var compChoice = "the computer chose paper";
}
if(choice === 3){
	var compChoice = "the computer chose scissors";
}

if(input1Id !== "paper" || input1Id !== "scissors"){
	var gameResult = "Invalid Input";
	var userChoice = "NOOOO";
}
//takes input into a variable and makes it lowercase
input1Id = domInput1().toLowerCase();

if(input1Id == "paper" && choice ===1){
		var gameResult = "You win";
		var userChoice = "you chose paper";
}
else if(input1Id == "paper" && choice==2){
	var gameResult = "You tie";
	var userChoice = "you chose paper";
}
else if(input1Id == "paper" && choice==3){
	var gameResult = "You lost";
	var userChoice = "you chose paper";
}


if(input1Id == "rock" && choice ===1){
		var gameResult = "You tie";
		var userChoice = "you chose rock";
}
else if(input1Id == "rock" && choice==2){
	var gameResult = "You lost";
	var userChoice = "you chose rock";
}
else if(input1Id == "rock" && choice==3){
	var gameResult = "You win";
	var userChoice = "you chose rock";
}


if(input1Id == "scissors" && choice ===1){
		var gameResult = "You lost";
		var userChoice = "you chose scissors";
}
else if(input1Id == "scissors" && choice==2){
	var gameResult = "You win";
	var userChoice = "you chose scissors";
}
else if(input1Id == "scissors" && choice==3){
	var gameResult = "You tie";
	var userChoice = "you chose scissors";
}
domTextOutput(compChoice+ "</br>" + userChoice +  "</br>" +gameResult + "</br> You have played this many games: " + gameResultCount+
"</br> You have won this many: " + gameWinCount);


if(gameResult == "You tie" || gameResult == "You win" || gameResult == "You lost"){
	gameResultCount++;
}
if(gameResult == "You win"){
	gameWinCount++;
}


}

function handleGoButtonClick(event) {
	var x = outputGameResult();

	// do events here
	//Example - set value of input 1 to "Hello JavaScript!"
	domInput1("");
	//Example - get value of input 1 and alert it to user
	//Example - put text from input 2 into text output box
}



// HELPER FUNCTIONS - The following code is helper functions to get you started

// This function sets and returns the value of Input 1
function domInput1(newval) {
	var input1Reference = document.getElementById("input1Id");
	if(newval !== undefined) {
		input1Reference.value = newval;
	}
	return input1Reference.value;
}

// This function sets and returns the value of Input 2


// This function sets and returns the value of Input 2
function domTextOutput(newval) {
	var textOutputReference = document.getElementById("textOutputId");
	if(newval !== undefined) {
		textOutputReference.innerHTML = newval;
	}
}

/* This is an Immediately Invoked Function Expression (IIFE)
   The code here runs immediately after the page loads.
   In this case, we are setting up an event handler for
   button presses.
*/
(function() {
	document.getElementById("goBtnId").onclick = handleGoButtonClick;
}());
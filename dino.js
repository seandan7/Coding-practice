//Dinosaur programming challenge


var dinosaur = function(type,era,food){
	return  [type,era,food];
	
}
var x = dinosaur["t-rex", "2000", "plants"];

var dinosaurs = [];
var emptyDino = function(){
	var dinoNumber = prompt("How many dinos you want?");
	for(x=1; x<=dinoNumber; x++){
		var dinoType = prompt("What type of dinosaur?");
		var dinoEra = prompt("What era is the dinosaur?");
		var dinoFood = prompt("What did your dino eat?");
		var newDino = dinosaur(dinoType, dinoEra, dinoFood);
		dinosaurs.push(newDino);
	}
	//print the data
	for(i=0; i<dinoNumber; i++){
		var d = dinosaurs[i];
		var dType = d[0];
		var dEra = d[1];
		var dFood = d[2];
		console.log("You have a " + dType +" dinosaur");
		console.log("It is from the year " + dEra);
		console.log("It likes to eat " + dFood);
	}
	}



emptyDino();


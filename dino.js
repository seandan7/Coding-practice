//Dinosaur programming challenge


var dinosaur = function(type,era,food){
	return  [type,era,food];
	
}
var x = dinosaur["t-rex", "2000", "plants"];
console.log(x);
var dinosaurs = [];
var emptyDino = function(){
	emptyDino = [];
	var dinoNumber = prompt("How many dinos you want?");
	for(x=1; x<=dinoNumber; x++){
		var dinoType = prompt("What type of dinosaur?");
		var dinoEra = prompt("What era is the dinosaur?");
		var dinoEats = prompt("What did your dino eat?");
	emptyDino.push(dinoType);
	emptyDino.push(dinoEra);
	emptyDino.push(dinoEats);
		dinosaurs.push(emptyDino);

	}
}

emptyDino();

console.log(emptyDino);
console.log(dinosaur);
	
	

var Person = function (name) {
	this.name = name;
};

Person.prototype.greet = function() {
	return "Hello, "+this.name;
};
var albert = new Person("Sean Daniels");

console.log(albert.greet());

var santa = {
	say: function() {
		console.log("ho ho ho");
	}
}
santa.say();

var things = [
	function() {
		alert("thingOne");
	},
	function() {
		alert("thingTwo");
	},
];
for( var x=0; x<things.length; x++ ) {
	things[x]();
}

// Anon Functions as Parameters

function eventHandler(event) {
	event();
}

eventHandler(function(){
	//do a lot of event related things
	console.log("event Fired");
});

// Anon functions in confitional logic

var shape;
if(shape_name === "SQUARE") {
	shape = function() {
		return "drawing square";
	}
} else {
	shape = function() {
		return "drawing square";
	}
}
alert(shapre());
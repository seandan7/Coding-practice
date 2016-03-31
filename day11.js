//JS Day 11
"use strict"

//forEach Notes
var myArray = ["a", "b", "c", "d",];

/*normal loop
for (var i = 0; i<myArray.length; i++){
	console.log(myArray[i]);
}
*/

//forEach loop
myArray.forEach(function(item){
	console.log(item);
});

//sorting arrays--sort() marks 100 and 10 less than 2

var nums = [1, 4,7,2,9,5, 10, 100];
var nums2 = [{x: 1}, {x: 2}, {x:4}, {x:3}];

nums.sort(function(a,b){
return a-b;


});

nums2.sort(function(a,b){
	return a.x-b.x;
	
});

console.log(nums2);


//create our cup using dot notation


var myCup = new Object();
myCup.color = "black";
myCup.type = "mug";
myCup.status = "full";
myCup.content = "coffee";
myCup.clean = false;

//add a pour method to the cup Object
myCup.pour = function pour(){
	if(this.status ==="full"){
		this.status = "half-full";
	}
	else{
		this.status = "empty";
		this.content = "none";
		
	}
	return this.status;
}
myCup.fill = function fill(content){
	
	if(this.status ==="empty"){
		
		this.status = "full";
		this.content = content;
	}
	return this.status;
}
myCup.wash = function wash(){
	this.status= "empty";
	this.content = "none";
	this.clean = true;
	return this.status;
	
}



//bracket notation.
var myCup2 = {};
myCup2["color"] = "black";
myCup2["type"] = "mug";
myCup2["status"] = "full";
myCup2["content"] = "coffee";
	
//another way to create an object as name: value pairs
var myCup3 = {color: "black", type: "mug", status: "full", content:"coffee"};




//Look up JS-1 Day 11 Event review task js folder in Github!!!
//javascript.info

/* Creates Item by click. deleted by click.

var button = document.getElementById("addItem");

var i = 0;

button.addEventListener("click", function(){
	i++;
	var li = document.createElement("li");
	li.innerHTML = i;
	var ul = document.getElementById("myList");
	ul.appendChild(li);
	
li.addEventListener("click",function(){
	ul.removeChild(li);
});
	
}
);

*/
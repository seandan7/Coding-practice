//JS Day 11

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


//JS Final Project

var toDoItems = [
	{name : "Check email", isDone: "no"}
		];

var items = 0;

		
function printList(){
	items++;
	var list = document.getElementById("ul");
	
	for (var i=0; i<toDoItems.length; i++){
		var item = toDoItems[i];
		var toDo = document.createElement("li");
		toDo.textContent = item.name;
		toDo.setAttribute("id", "item-"+ i);
		toDo.setAttribute("rel", item.name);
	
		toDo.addEventListener("click", function(evt){
			 //item.setAttribute("style", "text-decoration: line-through");	   
				list.removeChild(evt.target);
				toDoItems.splice(item,1)

		});
		list.appendChild(toDo);

	}	
}

/*
function isFinished(){
	var list = document.getElementById("ul");
	
	if()
	
	
}




*/



	function deleteList(){
		var list = document.getElementById("ul");
		list.innerHTML= ("");

	}


    document.getElementById("inputItem").value;       
	var form = document.getElementById("myForm");
	
	   form.addEventListener("submit", function (evt) {
            var listItem = document.getElementById("inputItem").value;
			var newItem = {name:listItem, isDone: "no"};
			toDoItems.push(newItem);
			deleteList();
			printList();
			evt.preventDefault();
			console.log(listItem);
        });
	
	
	

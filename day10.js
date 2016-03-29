//JS day 10
"use strict"

       var movieObjs = [
            {title: "Star Wars", release: 1977},
            {title: "Inception", release: 2010},
            {title: "The Matrix",release: 1999}
        ];
		
	function printList(){	
	var div = document.getElementById("movieListDiv");
        console.log(movieObjs.length);
		for (var i = 0; i < movieObjs.length; i++) {
            var movie = movieObjs[i];
            var a = document.createElement("p");
            a.textContent = movie.title;
            a.setAttribute("rel", movie.title);
            a.setAttribute("style", "color:green;");
            a.addEventListener("click", function () {
                alert(this.getAttribute("rel"));
            });
 
        div.appendChild(a);
        }
	}
	function deleteList(){
		var div = document.getElementById("movieListDiv");
		div.innerHTML= ("");
	
		
	}
        document.getElementById("movieTitle").value;       
		var form = document.getElementById("newMovieForm");
 
        form.addEventListener("submit", function (evt) {
            var movie = document.getElementById("movieTitle").value;
			var newMovie = {title:movie, release: 0};
			movieObjs.push(newMovie);
			deleteList();
			printList();
			evt.preventDefault();
			console.log(movie);
        });
		
		printList();
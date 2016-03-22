//DOM JS

"use strict"
/*
        var h1 = document.getElementById("myHdr");
        console.log(h1);
		
          var hasClass = h1.hasAttribute("class");
       console.log("The h1 tag has a class attribute: ", hasClass);
	         
			 
		h1.setAttribute("rel", "something");
        console.log(h1);
		

		
		setTimeout(function(){
			h1.setAttribute("style", "background-color: red;");
			console.log(h1);}, 3000);
		
		
		var a = document.querySelector("ul li a");
        console.log(a);
		        var anchors = document.querySelectorAll("ul li a");
       console.log(anchors);
       console.log(anchors.length);
	   
	      
        for (var i = 0; i < anchors.length; i++) {
               var anchor = anchors.item(i);
                console.log(anchor.href);
        }
		*/
		//for dynamic changes. highlighting a field for wrong password/inputs
		var h1 = document.getElementById("myHdr");
		h1.style.color = "blue";
    var a = document.createElement("a");
        console.log(a);
		
        a.textContent = "I'm a link to google";
        console.log(a);
		
		   a.setAttribute("href", "http://www.google.com");
        console.log(a);
			//replaces current style
	//	a.setAttribute("style","color:red")
		
		a.style.backgroundColor = "lightblue";
		a.style.color = "gray";
		a.style.textDecoration = "none";
		
				        //document.body.appendChild(a);
		var div = document.getElementById("myDiv");
		
		div.appendChild(a);
		
		
var enter = confirm("You are outside a forest cabin. Press OK to enter.");

if(enter)
{
	// go into the cabin
	
	//ask user for choice
	var bowl = prompt("You see three bowls of porridge. Eat bowl 1, 2, or 3?");
	
	// convert response to number
	bowl = parseInt(bowl);
	
	//logic for choice
	switch(bowl)
	{
		// end game
		default: 
			console.log("You starved. THE END!");
			break;
		// end game
		case 1: 
			console.log("It's too hot! THE END!");
			break;
		// end game
		case 2:
			console.log("It's too cold! THE END!");
			break;
			
		case 3:
			console.log("It's delicious!");
			// ask how long to sleep
			var sleep = "The porridge makes you sleep. Nap for how many hours?";
			var hours = prompt(sleep);
			
			// convert response to number
			hours = parseInt(hours);
			
			if (hours < 2) {
				// You win!!!
				console.log("You wake just in time, and scamper away! You WIN!");
			} else {
				// end game
				console.log("You sleep to late, and are eaten by hungry bears.");
			}
			console.log("THE END.");	
	}
}
else
{
	//didn't go in
    console.log("And that's the world's shortest fable. THE END.")
}


// This example uses if statements only, no switch
/*
switch(bowl) {
    //go into the cabin
    var bowl = prompt("You see three bowls of porridge. Eat bowl 1, 2, or 3?")
    case 1:
        console.log("It's too hot! THE END");
    case 2:
	
        console.log("It's too cold! THE END");
		
     case 3:
        console.log("It's delicious.");
        
        var hours = "The porridge makes you sleepy. Nap for how many hours?";
        var sleep = prompt(hours);
        sleep = Number(sleep);
        
        if (sleep < 2) {
            console.log("You wake just in time, and scamper away!");
        } else {
            console.log("You sleep to late, and are eaten by hungry bears.");
        }
        console.log("THE END.");
        
    }
} else {
    //didn't go in
    console.log("And that's the world's shortest fable. THE END.")
}
*/
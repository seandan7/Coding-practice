//JS1 DAY 7
//JS Counter

var count = 0;

function myClickUpHandler(event) {
	count ++;
	document.getElementById("myCount").innerHTML = count;
	printPyramid(count);
}

function myClickDownHandler(event) {
	if(count > 0) {
		count --;
	}
	document.getElementById("myCount").innerHTML = count;
	printPyramid(count);
}

function myClickResetHandler(event) {
	count = 0;
	document.getElementById("myCount").innerHTML = count;
	printPyramid(count);
}

function printPyramid(cnt) {
	var outString = "";
	
	for (var j = 0; j<cnt; j++) {
		outString += "<p>";
		for(var k = 0; k<j+1; k++) {
			outString += "#";
		}
		outString += "</p>";
	}
	document.getElementById("myPyramid").innerHTML = outString;
}

document.getElementById("myBtnUp").onclick = myClickUpHandler;
document.getElementById("myBtnDown").onclick = myClickDownHandler;
document.getElementById("myBtnReset").onclick = myClickResetHandler;



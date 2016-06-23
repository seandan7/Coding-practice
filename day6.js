
/*Day 6 Javascript notes

//capitalize and add period

function capitalizeAndAddPeriod(str){
	
	if(!str || typeof str !== "string"){
		
		return "";
	}
	
	
	if(str[str.length - 1] !== "."){
		str = str + ".";
	}
	return str[0].toUpperCase() + str.substring(1);	
	}

	
function flipString(str) {
	
		if(!str || typeof str !== "string"){
		
		return "";
		}
		
		// abcdef->defabc
		if(str.length < 2 || str.length % 2 === 1){
			return "";
		}
		
		return str.substring(str.length/2) + str.substring(0, str.length/2);
}


// Shakey, review
function flipString2(str){
	var result;
if (!str || typeof str !== "string"){
return "";
}
	
	if (str.length == 1){
		return str;
	}
	else if(str.length %2 === 1){
		result = str.substring(Math.ceil(str.length/2), str.length) + str.charAt(Math.floor(str.length/2)) + str.substring(0, Math.floor(str.length/2));
	}
	else {
		result = str.substring(str.length/2, str.length) + str.substring(0,str.length/2);
		
	
		return result;
	}
}

//works without ifs
function average(numArray){
	
	//check array itself
	if(!numArray || typeof numArray !== "object" || numArray.length ===4){
		return NaN;
	} 
	
	//check the values in array
	if (!numArray[0] | typeof numArray[0] !== "number"){
		return NaN
	}
	
	if (!numArray[1] | typeof numArray[0] !== "number"){
		return NaN
	}
	if (!numArray[2] | typeof numArray[0] !== "number"){
		return NaN
	}
	if (!numArray[3] | typeof numArray[0] !== "number"){
		return NaN
	}
	var sum = numArray[0] + numArray[1] + numArray[2] + numArray[3];
	var average = sum/4;
	return average;
}

var j = 0;
function check(){
	j++;
	console.log(j);
	
	return j % 2 ===0;
}
function run(str){
	var checkResult = check();
	if(true || checkResult){
		alert("entered if");
	}
}

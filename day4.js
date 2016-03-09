//Javascript day 4

"use strict";
/*
var num1 = prompt("gimmie a numba");
var num2 = prompt("gimmie another");

var mult = parseInt(num1)*parseInt(num2);
alert(mult);
var div = parseInt(num1)/parseInt(num2);
alert(div);
*/
/*
var strA = "0123456789";

var strB = strA.substring(4,7);
var str1 = "airplane";
var str2 = str1.toUpperCase();
console.log(strB);
console.log(str1);
console.log(str2);
*/

/*Dates
var today = new Date();
var thisYear = today.getFullYear();
console.log(today);
*/


function capitalizeFirstLetter(string) {
    return string.substring(0).toUpperCase() + string.slice(1);
}
var s = capitalizeFirstLetter("sean");
console.log(s);

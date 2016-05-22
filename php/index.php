<?php

	$myArray=array("pizza","chocolate","marshmellows");

	echo $myArray[2];


	echo "<br/><br />";

	$anotherArray[0]="more pizza";
	$anotherArray[1]="pretzels";


	echo "<br/><br />";
	
	$thirdArray=array(
		"php" 			=> "server",
		"javascript"  	=> "client",
		"jquery" 		=> "client(JS)",
		"html" 			=> "client*"
	);

	print_r($thirdArray);
	
	$anotherArray[] = "peanuts";
	echo "<br/><br />";
	
	print_r($anotherArray);
	
	echo "<br/><br />";
	
	unset($thirdArray[html]);
	
	print_r($thirdArray);
	
	$name="Sean"
	
	unset($name);
?>
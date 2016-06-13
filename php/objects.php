<?php

	class Person {
		
		// Define attributes
			var $first_name = "No value set";
			var $last_name = "No value set";
			var $age = 22;
		
		// Define a constant
		//define("MIDDLE_NAME", "Brian");
		
		// Methods
		
		function operation_01(){
			
		}
		function operation_02(){
			
		}
	} // end of class Person

	$person_01 = new Person();
	$person_01->first_name = "Sean";
	$person_01->last_name = "Dan";
	
	echo $person_01->first_name;
	echo "<br />";
	echo $person_01->last_name;
	echo "<br>";
	echo "<br>";	
	echo "Age: ".$person_01->age;
?>
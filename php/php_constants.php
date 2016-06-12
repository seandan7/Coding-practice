
<?php

	class Person {
		
		const MIDDLE_NAME = "Brian";
		
		
		var $first_name = "N/A";
		var $last_name = "N/A";
		
		function set_person_name(){
			$this->first_name = "sean";
			$this->last_name = "daniels";
		}
		
		function get_person_name(){
			echo "Changed Name: ".$this->first_name." ".$this->last_name; 
		}
	}
	
	$person_01 = new Person();
	
	echo "<h1 style='text-align:center;'>Hello</h1>";
	
	echo "Default name: ".$person_01->first_name." ".$person_01->last_name;
	echo "<br>";
		echo "<br>";
	
	//Change the name
	$person_01->set_person_name();
	
	$person_01->get_person_name();
		echo "<br>";
			echo "<br>";
			
	echo "Constant Value: ".Person::MIDDLE_NAME;
	?>
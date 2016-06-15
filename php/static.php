<?php

	class People{
		
		// Static class attributes
		
			static $first_name = "N/A";
			static $last_name = "N/A";
			
		// Static class constants
		
			const SCHOOL = "FSU";
			
		// Static Functions
		
		static function set_name($firstName, $lastName){
			self::$first_name = $firstName;
			self::$last_name = $lastName;
		}
		
		static function get_name(){
			return self::$first_name." ".self::$last_name;
		}
	}// End of class People
	
	echo "<h2 align='center'>Section 5</h2>";
	echo "<h3>Static class attributes default values<br>";
	echo "First Name: ".People::$first_name."<br>";
	echo "Last Name: ".People::$last_name."<br>";
	
	echo "<h3>New values for static class attributes<h3>";
	People::set_name("Sean","Daniels");
	echo "Full name: ".People::get_name();
	
	echo "<h3>Class Constants</h3><br>";
	echo "School: ".People::SCHOOL;
?>
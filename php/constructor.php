<?php

	class Employee {
		
		// Attributes
		
			private $first_name;
			private $last_name;
			private $id;
			
		// Default Constructor
		
			public function __construct($firstName, $lastName, $emp_id){
				$this->first_name = $firstName;
				$this->last_name = $lastName;
				$this->id = $emp_id;
			}
		
		// Default destructor
		
			function __destruct(){
				echo "<h3>Now destroying previous objects created...</h3>";
			}
		
		// Methods
			
			function set_employee_info($firstName,$lastName,$emp_id){
				$this->first_name = $firstName;
				$this->last_name = $lastName;
				$this->id = $emp_id;
			}
		
			function get_employee_info(){
				echo "Name: ".$this->first_name." ".$this->last_name;
				echo "<br>";
				echo "ID Number: ". $this->id; 
				echo "<br><br>";
			}
		
	} // end of class Person
	
		// Create new objects with values
		$emp_01 = new Employee("Sean", "D", 123);
		$emp_02 = new Employee("Jim", "Jones", 456);
		$emp_03 = new Employee("Sunny", "D", 789);
		
		// Display title of exercise project
		
			echo "<h1 style='text-align:center;'>Exercise Section 4</h1>";
			
		// Display the employees info
		
			echo '<h2>List of Employees: </h2>';
			$emp_01->get_employee_info();
			$emp_02->get_employee_info();
			$emp_03->get_employee_info();
?>
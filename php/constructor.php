<?php

	class Employee {
		
		private $first_name;
		private $last_name;
		private $id;
		
		public function __construct($firstName,$lastName,$emp_id){
			$this->first_name = $firstName;
			$this->last_name = $lastName;
			$this->id=$emp_id;
		}
		function get_emp(){
			echo "Name: ".$this->first_name." ".$this->last_name;
			echo "<br>"."ID Number: ".$this->id."<br><br>";
		}	
		function set_employee_info($firstName,$lastName,$emp_id){
			$this->first_name = $firstName;
			$this->last_name = $lastName;
			$this->id = $emp_id;
	}
		
		function __destruct(){
			echo "<p style='font-weight: bold;'>Now destroying previous objects created!</p><br>";
		}
	}// end of class Person
		$emp_01 = new Employee("Sean","Daniels",123);
		$emp_02 = new Employee("Jim", "Jones",456);
		$emp_03 = new Employee("Bobby", "Harrison",789);
		
	echo "<h1 style='text-align: center;'>Exercise Section 4: The constructor/destructor methods</h1>";
	echo "<br><h3>List of employees</h3>";
	$emp_01->get_emp();
	$emp_02->get_emp();
	$emp_03->get_emp();
?>

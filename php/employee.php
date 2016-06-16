<?php

	// Create Employee class.
	
	class Employee {
		
		// Declare class constants
		
			const MANAGER = "Manager";
			const WORKER = "Worker";
			const ASSISTANT_MANAGER = "Assistant Manager";
			const MANAGER_WAGE = 19;
			const ASSISTANT_MANAGER_WAGE = 15;
			const WORKER_WAGE = 12;
			
			
		// Attributes
		
			protected $first_name;
			protected $last_name;
			protected $status;
			protected $user_id;
			protected $payrate;
			protected $hours_worked;
			
		// Class constructor
		
			public function __construct($firstName, $lastName, $myStatus, $myID, $myPayRate, $myHours){
				$this->first_name = $firstName;
				$this->last_name = $lastName;
				$this->status = $myStatus;
				$this->user_id = $myID;
				$this->payrate = $myPayRate;
				$this->hours_worked = $myHours;
			}
			
		// Functions 
			public function get_emp_info(){
				echo "First Name: ".$this->first_name."<br>";
				echo "Last Name: ".$this->last_name."<br>";
				echo "Status: ".$this->status."<br>";
				echo "User ID: ".$this->user_id."<br>";
				echo "Pay Rate: ".$this->payrate."<br>";
				echo "Hours Worked: ".$this->hours_worked."<br>";
				echo "<h4>Paycheck amount: $".($this->hours_worked * $this->payrate)."</h4>";
			}
	} // End of class Employee

	// Title
	
	echo "<h1 style='text-align:center'>Employee Database Center</h1>";
	
	$emp_01 = new Employee("Sean", "Daniels",Employee::MANAGER,123,Employee::MANAGER_WAGE,40);
	$emp_01->get_emp_info();
	
	$emp_02 = new Employee("Dan", "Seaniels",Employee::WORKER,456,Employee::WORKER_WAGE, 30);
	$emp_02->get_emp_info();
	
	$emp_03 = new Employee("Jimmy", "Billz", Employee::ASSISTANT_MANAGER,789,Employee::ASSISTANT_MANAGER_WAGE,35);
	$emp_03->get_emp_info();
?>
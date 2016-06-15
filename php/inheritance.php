<?php

	class A {
		
		// Attributes 
		
		protected $attribute_01_A = "Attriute 1 from class A.";
		protected $attribute_02_A = "Attribute 2 from class A.";
		
		// Functions
		
		public function get_attributes_from_A(){
			echo "Attribute 1: ".$this->attribute_01_A."<br>";
			echo "Attribute 2: ".$this->attribute_02_A."<br>";
		}
	} // End of class A
	
	class B extends A {
		// Inherits public features from class Attribute
		
		// Override the attributes
		
		private $attribute_01_B = "Attribute 1 from class B";
		private $attribute_02_B = "Attribute 2 from class B";
		
		// Functions 
		
		public function get_attributes_from_B(){
			echo "<h3>Call Attributes from class B</h3>";
			echo "Attribute 1: ".$this->attribute_01_B."<br>";
			echo "Attribute 2: ".$this->attribute_02_B."<br>";
		}
		public function get_attributes_from_parent(){
			echo"<h3>Call attributes from class A</h3>";
			parent::get_attributes_from_A();
		}	
	} // End of class B
	
	$b = new B();
	
	// Display Title
	
	echo "<h1 style='text-align: center;'>Exercise section 6</h1>";
	$b->get_attributes_from_B();
	$b->get_attributes_from_parent();

?>

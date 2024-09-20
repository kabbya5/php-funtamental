<?php
class Employee{

	public $name;
	public $salary;

	// Corrected the type to float
	function __construct(string $name, float $salary){
		$this->name = $name;
		$this->salary = $salary;
	}

}

// Corrected semicolons to commas in the array
$employees = [
	new Employee('Jora', 1000),
	new Employee('Stive', 1500),
	new Employee('Morgan', 2000),
	new Employee('No Name', 1500)
];

?>



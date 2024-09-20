<?php
class Employee{

	public $name;
	public $salary;

	function __construct(string $name, float $salary){
		$this->name = $name;
		$this->salary = $salary;
	}

	function addSalary(float $percentange){
		
		$this->salary = $this->salary + ($this->salary) * ($percentange/100);
	}

	function getInfo(){
		return "Name: {$this->name}  Salary: {$this->salary}";
	}

}

$employees = [
	new Employee('Jora', 1000),
	new Employee('Stive', 1500),
	new Employee('Morgan', 2000),
	new Employee('No Name', 1500),
];

foreach($employees as $employee){
	echo $employee->getInfo() . "<br>";
	$employee->addSalary($percentage = 12.30);
	echo $employee->getInfo() . "<br>";

}
<?php 

class Employee{
    protected $name;
    protected $salary;

    public function __construct($name,$salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInfo(){
        return "Employee $this->name, salary $this->salary";
    }
}

class Manager extends Employee{
    
}

$employees = [
    new Manager('Kabbya', '25000'),
];

foreach($employees as $employee){
    echo $employee->getInfo();
}
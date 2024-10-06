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
    public function getInfo()
    {
        return "Manager $this->name, salary $this->salary";
    }
}

class Programmer extends Employee{
    public function getInfo()
    {
        return "Programmer $this->name, salary $this->salary";
    }
}

$employees = [
    new Manager('Manager', '250000'),
    new Programmer('Programmer','120000'),
    new Programmer('Programmer2','100000')
];

foreach($employees as $employee){
    echo $employee->getInfo();
}
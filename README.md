Inheritence:

Inheritence has main Two goal:
1: Allow Polymorphism,
2: Remove Duplicate Code,

Example: 
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

The problem is its shoud print Manage {name} {salary}
This problem we can solve methodoverridin 
Whit is method Overriding:
Method overriding is a feature in object-oriented programming (OOP) that allows a subclass (or derived class) to provide a specific implementation of a method that is already defined in its superclass (or parent class). When a method in a subclass has the same name, return type, and parameters as a method in the superclass, the subclass's method is said to override the method of the superclass.

Key Points of Method Overriding:
Same Method Signature: The method in the subclass must have the same name, parameters, and return type as the method in the parent class.
Run-time Polymorphism: Method overriding is used to achieve run-time (dynamic) polymorphism. This means the method that gets called is determined at runtime based on the object's actual type, not the reference type.

# php-funtamental

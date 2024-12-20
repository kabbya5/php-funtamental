<?php 

class Person{
    public $name;
    public $age;

    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function __colne(){
        return $name = $this->name . '(Cloned)'; 
    }
}

$person1 = new Person("Kabbya", 25);
$person2 = clone $person1;

echo $person1->name . PHP_EOL; 
echo $person2->name . PHP_EOL; 
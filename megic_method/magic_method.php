<?php 

class MagicDemo{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function __set($key, $value){
        $this->$key = $value;
    }

    public function __get($key){
        echo "$key:" . $this->$key  ."<br>";
    }

    public function __toString(){
        return "Magic Object With Properties" . json_encode($this->name, $this->age) . "<br>";
    }

    public function __call($name, $arguments) {
        echo "Calling method '$name' with arguments: " . implode(', ', $arguments) . "\n";
    }

    public function __destruct() {
        echo "Destroying the MagicDemo object\n";
    }
}

$demo = new MagicDemo("John Doe", 50);
$demo->age = 30; 
$demo->age;
$demo->name;
$demo->name = "Kabbya";
$demo->name;
$demo->greet("Hello", "World");
echo $demo;
echo $demo;
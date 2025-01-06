<?php 
require('fly.php');

class Character{
    private $name;
    private $health;
    private $attack_power;

    public function __construct(string $name, float $health = 100, int $attack_power = 10){
        $this->name = $name;
        $this->health = $health;
        $this->attack_power = $attack_power;
    }

    public function walk(){
        echo "Walking speed is 30 kh";
    }

    public function attack(string $target){
        $this->health = 50;
        echo " {$this->name} attacks {$target} with attacking power {$this->attack_power} \n";
    }

    public function defend($attacker){
        echo " {$this->name} defends against {$attacker} \n";
    }

    public function gethealth(){
        return $this->health;
    }

    public function getName(){
        return $this->name;
    }

    public function eatingFood(){
        return  $this->health += rand(10, 30);
    }

}

class Warrior extends Character implements Fly {
    public function fly(){
        echo "{$this->getName()} can Fly \n";
    }
}

class Mage extends Character {
    //
}


$warrior = new Warrior('Warrior');
$mage = new Mage('Mage', 100, 15);

$warrior->attack('Mega');
$warrior->defend('Mega');
$warrior->fly();
echo "health is " .$warrior->getHealth() . "\n";
$warrior->eatingFood();
echo "health is " .$warrior->getHealth() . "\n";


<?php 
class Address
{
    public $city;

    public function __construct($city)
    {
        $this->city = $city;
    }
}

class User
{
    public $name;
    public $address;

    public function __construct($name, Address $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function __clone()
    {
        $this->address = clone $this->address;
    }
}

$address = new Address("New York");
$user1 = new User("Kabbya", $address);

$user2 = clone $user1;
$user2->address->city = "Los Angeles";

echo $user1->address->city . PHP_EOL; // Outputs: New York
echo $user2->address->city . PHP_EOL; // Outputs: Los Angeles

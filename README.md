# Clone
The __clone() magic method in PHP is called when an object is cloned using the clone keyword. It allows you to define specific behaviors that should occur during the cloning process, such as deep copying properties or resetting certain attributes in the cloned object.
### Syntax:
```php
public function __clone(): void
```
### Purpose: Customize the behavior of the object when it is cloned.
### Shallow vs Deep Copy
Shallow Copy: When an object is cloned, PHP creates a new object with copies of the original object's properties. If a property is an object, it is not cloned—the original and the cloned objects will reference the same object.
### Deep Copy: 
If we need to clone the objects within the properties, we must do this manually using the __clone() method.
### Example 1: Basic __clone() Usage
```php
<?php
class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __clone()
    {
        $this->name = $this->name . ' (Cloned)';
    }
}

$person1 = new Person("Kabbya", 25);
$person2 = clone $person1;

echo $person1->name . PHP_EOL; // Outputs: Kabbya
echo $person2->name . PHP_EOL; // Outputs: Kabbya (Cloned)

```

### Example 1: Basic __clone() Usage
```php
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
echo $user2->address->city 

```

### Example 3: Reset Specific Properties
```php
<?php
class Document
{
    public $content;
    public $lastEdited;

    public function __construct($content)
    {
        $this->content = $content;
        $this->lastEdited = date("Y-m-d H:i:s");
    }

    public function __clone()
    {
        $this->lastEdited = null; // Reset lastEdited on clone
    }
}

$doc1 = new Document("Original Content");
$doc2 = clone $doc1;

echo $doc1->lastEdited . PHP_EOL; // Outputs: Current timestamp
echo $doc2->lastEdited . PHP_EOL; // Outputs: (null)


```

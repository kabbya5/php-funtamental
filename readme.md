# PHP Magic Method  
Magic methods in PHP are special methods that allow developers to customize object behaviors. Below is a list of magic methods with examples and descriptions.
## List of Magic Methods 
### `1 __construct()`
Called when an object is instantiated.
```php
class Example{
  public function __construct(){
    echo "Object created!";
  }
}
```
### `2 __call($name, $arguments)`
Triggered when invoking inaccessible or non-existent methods.
```php
class Example {
    public function __call($name, $arguments) {
        echo "Method '$name' called with arguments: " . implode(", ", $arguments);
    }
}
```

### `3 __callStatic($name, $arguments)`
Triggered when invoking inaccessible or non-existent static methods..
```php
class Example {
    public static function __callStatic($name, $arguments) {
        echo "Static method '$name' called with arguments: " . implode(", ", $arguments);
    }
}
```

### `4 __get($name)`
Called when accessing inaccessible or non-existent properties.
```php
class Example {
    public function __get($name) {
        echo "Getting property '$name'";
    }
}
```

### `5 __set($name, $value)`
Called when setting inaccessible or non-existent properties.
```php
class Example {
    public function __set($name, $value) {
        echo "Setting property '$name' to '$value'";
    }
}
```

### `6 __isset($name)`
Called when checking if a property is set with isset() or empty().
```php
class Example {
    public function __isset($name) {
        echo "Is '$name' set?";
    }
}
```

### `7 __unset($name)`
Called when an object is destroyed.
```php
class Example {
    public function __unset($name) {
        echo "Unsetting '$name'";
    }
}
```

### `8 __sleep()`
Invoked before serialize() to specify which properties to serialize.
```php
class Example {
    public function __sleep() {
        return ['property1', 'property2'];
    }
}
```
### `9 __wakeup()`
Called when an object is destroyed.
```php
class Example {
    public function __wakeup() {
        echo "Object unserialized!";
    }
}
```
### `10 __toString()`
Called when the object is treated as a string (e.g., echo $object).
```php
class Example {
    public function __toString() {
        return "Object as string";
    }
}
```
### `12. __invoke()`
Triggered when the object is called as a function.
```php
class Example {
    public function __invoke($arg) {
        echo "Object called with argument '$arg'";
    }
}
```
### `13. __clone()`
Called when an object is destroyed.
```php
class Example {
    public function __clone() {
        echo "Object cloned!";
    }
}
```
### `14. __debugInfo()`
Provides custom debug information for var_dump()
```php
class Example {
    public function __debugInfo() {
        return ['property' => 'value'];
    }
}
```
### `15. __set_state()`
Called when var_export() is used to export an object.
```php
class Example {
    public static function __set_state($array) {
        $obj = new self();
        foreach ($array as $key => $value) {
            $obj->$key = $value;
        }
        return $obj;
    }
}
```
### `17. __serialize() and __unserialize()`
Used for custom serialization logic (introduced in PHP 7.4).
```php
class Example {
    public function __serialize() {
        return ['property1' => $this->property1];
    }
    
    public function __unserialize($data) {
        $this->property1 = $data['property1'];
    }
}
```
### `18 __destruct()`
Called when an object is destroyed.
```php
class Example {
    public function __destruct() {
        echo "Object destroyed!";
    }
}
```

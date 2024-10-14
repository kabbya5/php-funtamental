A static class in PHP is a class that contains only static methods and properties.
You cannot instantiate a static class (i.e., you cannot create objects from it), 
but you can access its members (methods and properties) directly using the class name, 
without needing an object.

Key Features of Static Classes:
Static methods:
These methods belong to the class itself, not to any specific object instance,
and can be called without creating an object.

Static properties:
These are class-level properties shared by all instances of the class
(though static classes typically don't have instances). They hold values across all uses of the class.

Example:
class MathOperations {
    // Static property
    public static $pi = 3.1416;

    // Static method
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function circleArea($radius) {
        return self::$pi * $radius * $radius;
    }
}

// Accessing static property
echo MathOperations::$pi; // Output: 3.1416

// Calling static methods
echo MathOperations::add(10, 20); // Output: 30
echo MathOperations::circleArea(5); // Output: 78.54

Key Points:
No instantiation needed: You can directly call static methods and properties using ClassName::method() or ClassName::$property.

Shared state: Static properties hold their values across the lifetime of the script and are shared between all usages of the class.

Limitations:

Static methods cannot access non-static properties or methods.
Static classes are generally not instantiated as objects, so they are useful when you only need utility functions or shared data across the application.
Common Use Cases:
Utility classes (e.g., math operations, string manipulation)
Global configuration holders
Caching mechanisms


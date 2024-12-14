<?php 
class Singleton{
    private static $instance = null;

    private function __construct()
    {
        echo "Singleton instance Create <br>";
    }

    private function __clone(){
        //   
    }

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new Singleton();
        }
        
        return self::$instance;
    }
}

$instance1 = Singleton::getInstance(); 
$instance2 = Singleton::getInstance(); 
$instance2->__clone();

if ($instance1 === $instance2) {
    echo "Both instances are the same.\n";
} else {
    echo "Instances are different.\n";
}
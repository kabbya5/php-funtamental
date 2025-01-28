<?php 
class Product{
    public static function create(){
        return new static();
    }
}

class Book extends Product{
    public function info(){
        echo " This is a book product";
    }
}

class Laptop extends Product{
    public function info(){
        return "this is a laptop.";
    }
}
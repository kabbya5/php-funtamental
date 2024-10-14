<?php 
class Factorial{
    static public function calculateFactorial($n){
        if($n === 0){
            return 0;
        }elseif($n === 1){
            return 1;
        }

        return $n * (self::calculateFactorial($n-1));
    }
}

print_r(Factorial::calculateFactorial(5));
<?php 

class CountSquare{
    protected $matrix;

    public function __construct(array $matrix){
        $this->matrix = $matrix;
    }

    protected static function countSquares(){
        return __CLASS__;
    }
}

$matrix = [
    [0,1,1,1],
    [1,1,1,1],
    [0,1,1,1]
];

$cs = new CountSquare($matrix);

class Solution{
    protected function countSquares(){
        $matrix = $this->matrix;

        $m = count($matrix);
        $n = count($matrix[0]);

        $dp = array_fill(0, $m , array_fill(0, $n, 0));
        $count = 0;

        for($i = 0; $i < $m; $i++){
            for($j = 0; $j < $n; $j++){
                if($matrix[$i][$j] == 1){
                    if($i == 0 || $j == 0){
                        $dp[$i][$j] = 1;
                    }else{
                        $dp[$i][$j] = min($dp[$i - 1][$j], $dp[$i][$j-1], $dp[$i-1][$j-1]) + 1;
                    }

                    $count += $dp[$i[$j]];
                }
            }
        }
    }
}
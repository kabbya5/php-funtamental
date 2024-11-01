<?php 

class FindLarge{
    protected static $arr;

    public function __construct($arr){
        self::$arr = $arr;
    }

    public static function getSecoundLargestElement(){
        $array_len = count(self::$arr);
        
        if($array_len < 2)  return false;

        $first_large = -1;
        $second_large  = -1;

        for($i = 0; $i < $array_len; $i++){
            $num = self::$arr[$i];
            if ($num > $first_large) {
                $second_large = $first_large; 
                $first_large = $num; 
            } elseif ($num > $second_large && $num < $first_large) {
                $second_large = $num; 
            }
        }

        return $second_large ;
    }

    public static function findKstLargestElement($k){
        $arr = self::$arr;
        $len = count($arr);

        if($len < $k) return false; 

        $arr = array_values(array_unique($arr));

        $priorities = new SplPriorityQueue();

        for($i = 0; $i < count($arr); $i++){
            $priorities->insert($arr[$i], $arr[$i]);
        }

        $kst_element = 0;

        for($j = 1; $j <= $k; $j++){
            $kst_element = $priorities->extract();
        }

        return $kst_element;
    }

}

class SecoundLargestElement extends FindLarge{
    public  function displaySecoundLargestElement(){
        echo parent::getSecoundLargestElement();
    }
    
}
$array = [5, 3, 9, 1, 5, 7, 9];
$secondLargestElement = new SecoundLargestElement($array);
echo SecoundLargestElement::findKstLargestElement(2);
echo $secondLargestElement->displaySecoundLargestElement();
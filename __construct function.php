<?php

class Add{
  protected $x;
  protected $y;
  protected $z;

  public function __construct($x,$y,$z=0){
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }

  public function addition(){
    $sum = $this->x + $this->y +$this->z;

    if($this->z){
      echo "The sumation of three value is" . $sum . "<br>";
    }
    else{
      echo "The sumation of two value is" . $sum . "<small>  You didn't add 3rd number<//small>" . "<br>";
    }


  }
  public  function multification(){
    if ($this->z){
      $mul = $this->x * $this->y * $this->z;
      echo "The multification of three value is" . $mul;
    }else{
      $mul = $this->x * $this->y ;
      echo  "The multification of two value is" . $mul . "<small>  You didn't add 3rd number<//small>";
    }

  }
}
$add1 = new Add(12,2);
$add1->addition();
$add1->multification();

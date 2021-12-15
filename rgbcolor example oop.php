<?php
class RGB{
  private $color;
  private $red;
  private $green;
  private $blue;

  public function __construct($colorCode=""){
    $this->color = ltrim($colorCode,"#");
    $this->parseColor();
  }

  public function getColor(){
    return $this->color;
  }
  public function getRed(){
    return $this->red;
  }
  public function getGreen(){
    return $this->green;
  }

  public function getBlue(){
    return $this->blue;
  }


  public function getRgbColor(){
    return array($this->red,$this->blue,$this->green);

  }
  public function setRgbColor(){
    echo 'Red = '.$this->red . "Green = ". $this->green ."blue = " . $this->blue;
  }
  public function setColor($colorCode){
    $this->color = ltrim($colorCode,'#');
  }

  public function parseColor(){
    if ($this->color){
      list($this->red, $this->green , $this->blue) = sscanf($this->color, '%02x%02x%02x');
    }else{
      list($this->red, $this->green , $this->blue) = array(0, 0, 0);
    }

  }
}
$c = new RGB('#ffffff');
$c->setRgbColor();
 ?>

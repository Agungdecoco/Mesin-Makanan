<?php
require_once 'food.php';

class order {

  protected $id;
  protected $myFoods;

  public function __construct(){
    $explore = new explore();
    $this->id = $explore->id;
    $this->id = $explore->myFoods;
  }

  public function total(){
  }

  public function discount(int $id, int $amountMini, $amountMedium){
    if ($id == 2){
      if ($amountMini > 0 && $amountMedium > 0){
        $this->myFoods = ($this->myFoods) - (($this->myFoods/100)*2);
        return $this->myFoods;
      }
    }
  }

  public function amount(){
    echo "\n\nMasukkan jumlah topping : ";
    $amount = trim(fgets(STDIN));
    return $amount;
  } 
}
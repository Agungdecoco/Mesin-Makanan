<?php
require_once 'food.php'; 

class explore extends food {

  protected $option;
  protected $foods;
  public $id;
  public $myFoods;

  public function __construct()
  {
    $food = new food(); 
    $this->foods = $food->foods;
   
    return $this->foods;
  }

  public function menu($option)
  {
    $option = trim(fgets(STDIN));
    switch ($option) {
    case 1:
      $product = $this->foods[0]["price"];
      $this->id = 1;
      return $product;
      break;
    case 2:
      $product = $this->foods[1]["price"];
      $this->id = 2;
      return $product;
      break;
    case 3:
      $product = $this->foods[2]["price"];
      $this->id = 3;
      return $product;
      break;
    default:
        echo "Isi variabel tidak di temukan";
      break;
    }

    $this->myFoods = $product;
    return $this->myFoods;
  } 

  public function show(){
    $i = 1;
      foreach ($this->foods as $post){
        echo $i++.".".$post["name"]."\n";
        echo "  ".$post["price"]."\n\n";
      }
  }
}
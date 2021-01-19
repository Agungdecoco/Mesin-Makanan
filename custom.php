<?php
require_once 'topping.php';
require_once 'order.php';

class custom extends topping {

  protected $option;
  protected $toppingMini;
  protected $toppingMedium;
  protected $order;
  public $myToppingMini;
  public $myToppingMedium;
  public $amountToppingMini;
  public $amountToppingMedium;

  public function __construct()
  {
    $this->order = new order();
    $topping = new topping(); 
    $this->toppingMini = $topping->toppingMini;
    $this->toppingMedium = $topping->toppingMedium;
    return $this->toppingMini; $this->toppingMedium;
  }

  public function addToppingMini()
  {
    $product;

    $option = trim(fgets(STDIN));
    $this->amountToppingMini = $this->order->amount();
    switch ($option) {
    case 1:
      $product = $this->toppingMini[0]["price"];
      return $product*$this->amountToppingMini;
      break;
    case 2:
      $product = $this->toppingMini[1]["price"];
      return $product*$this->amountToppingMini;
      break;
    case 3:
      $product = $this->toppingMini[2]["price"];
      return $product*$this->amountToppingMini;
      break;
    case 4:
      $product = $this->toppingMini[3]["price"];
      return $product*$this->amountToppingMini;
      break;
    case 5:
      $product = 0;
      return $product*$this->amountToppingMini;
      break;
    default:
        echo "Isi variabel tidak di temukan";
      break;
    }
    $this->myToppingMini = $product;
    return $this->myToppingMini;
  } 

  public function addToppingMedium()
  {
    $product;

    $option = trim(fgets(STDIN));
    $this->amountToppingMedium = $this->order->amount();
    switch ($option) {
    case 1:
      $product = $this->toppingMedium[0]["price"];
      return $product*$this->amountToppingMedium;
      break;
    case 2:
      $product = $this->toppingMedium[1]["price"];
      return $product*$this->amountToppingMedium;
      break;
    case 3:
      $product = 0;
      return $product*$this->amountToppingMedium;
      break;
    default:
        echo "Isi variabel tidak di temukan";
      break;
    }
    $this->myToppingMedium = $product;
    return $this->myToppingMedium;
  } 

  public function showToppingMini(){
    $i = 1;
    echo "\n\n";
      foreach ($this->toppingMini as $post){
        echo $i++.".".$post["name"]."\n";
        echo "  ".$post["price"]."\n\n";
      }
      echo "5.Tidak";
  }

  public function showToppingMedium(){
    $i = 1;
    echo "\n\n";
      foreach ($this->toppingMedium as $post){
        echo $i++.".".$post["name"]."\n";
        echo "  ".$post["price"]."\n\n";
      }
      echo "3.Tidak";
  }

  
}
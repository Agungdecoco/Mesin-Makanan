<?php
require_once 'food.php'; 

class menu {

  use food;

  public function menu()
  {
    $angka = trim(fgets(STDIN));
    switch ($angka) {
    case 1:
      echo "1";
      break;
    case 2:
      echo "2";
      break;
    case 3:
      echo "3";
      break;
    default:
        echo "Isi variabel tidak di temukan";
      break;
    }

    $i = 1;
    foreach ($foods as $post){
      echo $i++.".".$post["name"]."\n";
      echo "  ".$post["price"]."\n\n";
    } 
  }
  
}

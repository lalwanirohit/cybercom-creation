<?php
class Car {
  public $brand;
  public $color;
  public $price;

  // a public function (default)
  function set_brand($brand) {  
    $this->brand = $brand;
    echo $this->brand;
  }

  // a protected function
  protected function set_color($color) { 
    $this->color = $color;
    echo $this->color;
  }

  // a private function
  private function set_price($price) { 
    $this->price = $price;
    echo $this->price;
  }
}

$mango = new Car();
$mango->set_brand('Audi'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_price('3000000'); // ERROR
?>
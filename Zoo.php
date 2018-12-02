<?php
include_once "Animal.php";

class Zoo {
  public $types_of_animals = ['Lion', 'Owl', 'Horse', 'Zebra', 'Monkey', 'Snake', 'Spider', 'Pantera', 'Elephant', 'Pinguin'];
  public $animals = [];

  function generate() {
    for ($i = 0; $i < 20; $i++) {
      $num = mt_rand(0,9);
      $res = $this->types_of_animals[$num];
      $new_animal = new $res();
      array_push($this->animals, $new_animal);
    }
  }
    
  function showAnimals() {
    $content = "Zoo containts:\n";
    $types = array_count_values(array_map('get_class', $this->animals));
      
      foreach ($types as $type => $count) {
        $content .= "{$type}: {$count}\n";
      }
      echo $content;
  }
}

?>
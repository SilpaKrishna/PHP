<?php
class Fruit 
{
  public $name;
  public $color;
  function set_name($name) 
  {
    $this->name = $name;
    echo "fruit";
  }
  function get_name() {
    return $this->name;
  }
}
?>
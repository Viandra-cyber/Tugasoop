
<?php
class Animal {
  // Properties
  public $name;
  public $legs;
  public $cold_blooded;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_legs($color) {
    $this->color = $color;
  }
  function get_legs() {
    return $this->color;
  }
  function set_cold_blooded($cold_blooded) {
    $this->cold_blooded = $cold_blooded;
  }
  function get_cold_blooded() {
    return $this->cold_blooded;
  }
}

$sheep = new Animal();
$sheep->set_name('shaun');
$sheep->set_legs('2');
$sheep->set_cold_blooded('false');

echo "Name: " . $sheep->get_name();
echo "<br>";
echo "legs: " . $sheep->get_legs();
echo "<br>";
echo "cold_blooded: " . $sheep->get_cold_blooded();
?>
 <!-- index.php
$sungokong = new Ape("kera sakti");
$sungokong->yell() // "Auooo" -->
<!DOCTYPE html>
<html>
<body>

<?php
class Ape {
  // Properties
  public $sungokong;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$sungokong = new Ape();

$sungokong->set_name('kera sakti');


echo $sungokong->get_name();
echo "<br>";

?>
 
</body>
</html>
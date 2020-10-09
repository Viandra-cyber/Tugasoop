<!-- $kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop" -->
<!DOCTYPE html>
<html>
<body>

<?php
class Frog {
  // Properties
  public $kodok;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$kodok = new kodok();

$kodok->set_name('buduk');


echo $kodok>get_name();
echo "<br>";

?>
 
</body>
</html>
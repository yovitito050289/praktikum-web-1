<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>
 
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
echo __DIR__;
?>
 
</body>
</html>             
<!DOCTYPE html>
<html>
<body>

<?php
echo __FILE__;
?>
 
</body>
</html>      
<!DOCTYPE html>
<html>
<body>

<?php
function myValue(){
  return __FUNCTION__;
}
echo myValue();
?>
 
</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
echo __LINE__;
?>
 
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
  public function myValue(){
    return __METHOD__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>
 
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
  public function myValue(){
    return __METHOD__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>
 
</body>
</html>
<?php
namespace myArea;

function myValue(){
  return __NAMESPACE__;
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo myValue();
?>

</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
trait message1 {
  public function msg1() {
    echo __TRAIT__; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
 
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
trait message1 {
  public function msg1() {
    echo __TRAIT__; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
 
</body>
</html>
<?php
namespace myArea;

class Fruits {
  public function myValue(){
    return Fruits::class;
  }
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
$kiwi = new Fruits();
echo $kiwi->myValue();
?>

</body>
</html>

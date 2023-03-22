<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    
<?php
class Employee {
  private $name;
  private $salary;

     public function initialize($nam, $sal){
        $this-> name = $nam;
        $this -> salary = $sal;
     }
     public function print() {
    echo $this-> name . ", " ;
       if ($this->salary > 6000) {
          echo "si paga impuestos";
       }
       else {
          echo "no paga impuestos";
       }
          echo "</br>";
     }
}

$persona1 = new Employee();
$persona1 -> initialize("Juan", 3500);
$persona1 -> print();
echo "</br>";
$persona2 = new Employee();
$persona2 -> initialize("Maria", 7800);
$persona2 -> print();
?>

</body>
</html>
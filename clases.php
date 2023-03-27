
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

?>

</body>
</html>


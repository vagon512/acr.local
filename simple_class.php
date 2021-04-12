<?php
class people{
  private $name;
  private $sirname;
  private $birthDate;

  public function __construct(string $name, string $sirname, $birthDate){
    $this->name = $name;
    $this->sirname = $sirname;
    $this->birthDate = $birthDate;
  }

  public function sayHello(){
    echo "hello".$this->name;
 }

}//end_of_class

$con = new people("Ivan", "Goncharov", "1985-06-05");
 echo $con->sayHello();
?>

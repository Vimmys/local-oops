<?php
class hyundai {
    public $hbranch;
    public $hcars;
    function __construct(){
      echo  $this->hbranch;
    }
}
 class hyucars extends hyundai{
   public function hcarname($bname){
    echo "Hyundai car - ".$bname;
   }
 }
 class hyubranch extends hyundai{
  public function hbrname(){
      echo "Branches of Hyundai";
  }
  
 }
 $hcars = new hyucars();
 echo $hcars->hcarname("Verna");
 $hbrz = new hyubranch();
     echo $hbrz->hbrname();

?>
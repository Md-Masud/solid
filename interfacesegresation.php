<?php
// interface segresation basically different different interface
 interface fly{
  public function fly();
 }
 interface eat{
  public function eat()
 }
class HummindBird implements fly,eatr
 {
   public function eat()
   {
   }
   public function fly()
   {
   }
 }
 class Ostrict implements fly
 {
   public function eat()
   {
   }
   public function walk()
   {
      //logic 
   }
 }

?>
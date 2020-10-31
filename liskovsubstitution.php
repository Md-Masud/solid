<?php
// liskov substitution basically same class same behavior
class bird
{
 public function eat()
 {
 	//logic 
 }
}
 class HummindBird extends bird
 {
   public function eat()
   {
    parent::eat();// overwrite;
   }
   public function fly()
   {
      //logic 
   }
 }
 class Ostrict extends bird
 {
   public function eat()
   {
    parent::eat();// overwrite;
   }
   public function walk()
   {
      //logic 
   }
 }


?>
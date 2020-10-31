<?php
 // openClose principle basically main class no change
 class Employee
 {
   private $name;
   private $id;
   private $address;
   private $type;
   public function __construct ()
   {

   }
   public function calculateTax(taxable $employee)
   {
     $employee->cal();
   }
   public function conncetion()
   {
   	//$s=new DatabaseRepository();
   //	$s=$s->conncetion();
   	(new DatabaseRepository())->conncetion();
   }
   public function setName($name)
   {
   	$this->name=$name;
   }
   public function setId($id)
   {
   	$this->id=$id;
   }
   public function setAddress($address)
   {
   	$this->address=$address;
   }
 }
 interface taxable 
 {
  public function calc();
 }
 class LoyarEmplyee implements taxable
 {
 	public function calc()
 	{
 		//logic
 	}
 }
 class BadEmplyee implements taxable
 {
   public function calc()
   {
      //logic
   }
 }
?>
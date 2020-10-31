<?php
// single responsiblity basically single class but do not multiple class
 class Employee
 {
   private $name;
   private $id;
   private $address;
   private $type;
   public function __construct ()
   {

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
 class DatabaseRepository
 {
 	public function conncetion()
 	{
 		//database conncetion
 	}
 }
?>
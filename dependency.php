<?php
// dependency injection 
 class Employee
 {
   private $name;
   private $id;
   private $address;
   private $type;
   public function __construct (DatabaseRepository $conncetion)
   {
    $conncetion->conncetion();
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
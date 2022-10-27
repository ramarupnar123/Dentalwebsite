<?php

class user{
	public $name="rama";
	public $id=1;
	public $phone=12345667;

	function show()
	{
		return
		"ID=".$this->id."NAME=".$this->name."PHONE=".$this->phone;
	}
}
$obj=new user();
$this->show();


?>
<?php
class model1
{
	public $string;
	function __construct()
	{
		$this->string = 'Hello, We are in model 1 -> __construct';
	}
	
	function hello($who)
	{
		$this->string = "Hello $who";	
	}
}
?>
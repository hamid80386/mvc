<?php
class model2
{
	public $string;
	function __construct()
	{
		$this->string = 'Hello, We are in model 2 -> __construct';
	}
	
	function ByeBye($who)
	{
		$this->string = "ByeBye $who";	
	}
}
?>
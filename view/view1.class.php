<?php
class view1
{
	function __construct()
	{
				
	}
	
	function index()
	{
		require('./templates/index.php');	
	}
	
	function hello($data)
	{
		require('./templates/hello.php');	
	}
	
}
?>
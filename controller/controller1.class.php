<?php
class controller1
{
	private $model;
	private $view;
	function __construct()
	{
		$this->model = new model1();
		$this->view = new view1;
	}
	
	function index()
	{
		$this->view->index();
	}
	
	function hi($to)
	{
		$this->model->hello($to);	
		$this->view->hello( $this->model->string );
	}

}
?>
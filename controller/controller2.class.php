<?php
class controller2
{
	private $model;
	private $view;
	function __construct()
	{
		$this->model = new model2();
		$this->view = new view2;
	}
	
	
	function bye($to)
	{
		$this->model->byebye($to);	
		$this->view->bye( $this->model->string );
	}
}
?>
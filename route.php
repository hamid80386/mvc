<?php
require_once('config.php');
include_once('route.php');

$controller = '/';
$data = NULL ;
if(isset($r[0])) $controller = $r[0];
if(isset($r[1])) $data = $r[1];

if($controller == '/')
{
	$c = new controller1();
	$c->index();	
}

if($controller=='hi' && $data!==NULL) 
{
	$c = new controller1();
	$c->hi($data);
}

if($controller=='bye' && $data!==NULL) 
{
	$c = new controller2();
	$c->bye($data);
}
?>
<?php
require_once('config.php');

$r0 = $_SERVER['REQUEST_URI'];
$r = explode('/',$r0);
array_shift($r);
if($r[0]=='mvc') array_shift($r); 
if(end($r)=='') array_shift($r); 
//var_dump($r);

include_once('route.php');

?>
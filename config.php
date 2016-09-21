<?php
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
	$DS = DIRECTORY_SEPARATOR;
	//var_dump( str_replace('_', $DS , $className) . '.class.php');
    $fileName .=  str_replace('_', $DS , $className) . '.class.php';
 	var_dump($fileName);
    require_once $fileName;
}

set_include_path(implode(PATH_SEPARATOR, array(get_include_path(), './controller', './model', './view')));
//spl_autoload_register();

spl_autoload_register('autoload');

?>
<?php
function autoloadLibrary($class)
{
	$class = str_replace(NS_SEPARATOR, '/', $class);
	$filename = __DIR__."/application/library/" . $class . ".php";

	if (file_exists($filename) && (include $filename)) {
		return $class;
	}
	return false;
}
spl_autoload_register('autoloadLibrary');

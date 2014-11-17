<?php
define('BASE_PATH', realpath(__DIR__.'/../'));
define('APP_PATH', BASE_PATH . '/application');
define('VIEW_PATH', APP_PATH . '/templates');
define('NS_SEPARATOR', '\\');

function qe($output)
{
	echo '<pre>'.print_r($output, true).'</pre>';
}

<?php
define('BASE_PATH', realpath(__DIR__.'/../'));
define('APP_PATH', BASE_PATH . '/application');
define('VIEW_PATH', APP_PATH . '/templates');
define('NS_SEPARATOR', '\\');

function devPrint($output)
{
	if (env('APP_DEBUG')) {
		echo '<pre>' . print_r($output, true) . '</pre>';
	}
}

function devDump($output)
{
    if (env('APP_DEBUG')) {
        echo '<pre>' . var_dump($output, true) . '</pre>';
    }
}

function devDie($output)
{
	if (env('APP_DEBUG')) {
		echo '<pre>' . print_r($output, true) . '</pre>';
		die();
	}
}

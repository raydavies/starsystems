<?php
$env = 'development';
require_once(realpath(__DIR__.'/../config/constants.php'));
require_once(realpath(__DIR__.'/../config/info.php'));
require_once(realpath(__DIR__.'/../autoloader.php'));

Database\DbConnection::initializeConnection($db_params[$env]);

$uri = $_SERVER['REQUEST_URI'];
if ($env == 'development') {
	$uri = str_ireplace('/starsystems', '', $uri);
}

$page = new Page\PageLoader($uri);
$page->loadPage();

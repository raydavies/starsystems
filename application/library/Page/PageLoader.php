<?php
namespace Page;

use Database\DbConnection as Db;
use Page\Page;

class PageLoader
{
	protected $page;

	private $file;

	public function __construct($uri)
	{
		if ($uri == '/') {
			$this->file = 'home';
		} else {
			$segments = explode('/', trim($uri, '/'));
			$this->file = $segments[0];
		}
		$page = new Page(VIEW_PATH . '/' . str_replace(array('-', '_'), '', $this->file) . '.php');

		$sql = "SELECT `title` FROM `pages` WHERE `url` = '{$uri}' LIMIT 1";
		$result = Db::getConn()->query($sql);
		if ($result->getAffectedRows()) {
			$row = $result->fetchAssoc();
			$page->title = $row['title'];
		}
		$this->page = $page;
	}

	public function loadPage()
	{
		ob_start();
		include($this->page->getFile());
		$this->page->setContent(ob_get_clean());
		extract(get_object_vars($this->page));
		include (VIEW_PATH . '/layout/layout.php');
		ob_end_flush();
		return $this->page->getContent();
	}
}

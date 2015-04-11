<?php
namespace Page;

class Page
{
	public $title;
	public $content;
	
	protected $file;
	
	public function __construct($file)
	{
		$this->file = $file;
	}
	
	public function getFile()
	{
		return $this->file;
	}
	
	public function setContent($content)
	{
		$this->content = $content;
	}
	
	public function getContent()
	{
		return $this->content;
	}
}

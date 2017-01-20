<?php

class Controller
{
	public $view;


	public function __construct($name)
	{
		require_once('views/' . $name . '.php');
		$name = $name . 'View';
		$this->view = new $name();
	}
}

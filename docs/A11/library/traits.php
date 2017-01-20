<?php

# Trait definitions

/** makes a class non-instantiable, constructor and clone method are set to private */
trait NonInstantiable
{
	private function __construct()
	{
	}

	private function __clone()
	{
	}
}

/** makes a class a singleton, allows to get the only instance through getInstance() */
trait Singleton
{
	use NonInstantiable;

	private static $instance = null;

	public static function getInstance()
	{
		if(!isset(self::$instance) || self::$instance === null)
		{
			self::$instance = new self();
		}
		return self::$instance;
	}
}

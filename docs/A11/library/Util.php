<?php

final class Util
{
	use NonInstantiable;

	# returns the field '$key' from '$array' or '$default' (defaults to null) if the key does not exist
	public static function get_array($array, $key, $default = null)
	{
		return (isset($array) && isset($key) && isset($array[$key]) ? $array[$key] : $default);
	}

	# see get_array, easier way to access $_GET
	public static function get_param($key, $default = null)
	{
		return self::get_array($_GET, $key, $default);
	}
}

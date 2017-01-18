<?php

function __autoload($classname)
{
	require_once($classname . '.php');
}

	include_once "functions.php";
	include_once "livesearch.php";
	require_once "db.inc.php";
	require_once "Product.php";
	require_once "GameImage.php";
	#require_once "Cart.php";
	require_once "User.php";

?>

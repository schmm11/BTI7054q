<?php

if(!isset($_COOKIE["language"])) setcookie("language", "de", time()+60*60*24*60);

require_once('autoloader.php');
require_once('authentication.inc.php');

/** initialize resource for translations */
$resource = (isset($_COOKIE['language']) ? new Resource($_COOKIE['language']) : new Resource());
/** helper-function to just have to write tr('some-key') */
function tr($key)
{
	return $resource->tr($key);
}

### shopping cart
if(!isset($cart) || !$cart)
{
	if(!isset($_SESSION['cart']) || $_SESSION['cart'] === null)
	{
		$_SESSION['cart'] = new ShoppingCart();
	}
	$cart = $_SESSION['cart'];
}

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="mainstyle.css" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Project Webshop</title>
	</head>

	<body>
		<div class="container">
			<header>
				<a href="index.php" />
			</header>

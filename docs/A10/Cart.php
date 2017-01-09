<?php

require_once('autoloader.php');

require_once('authentication.inc.php');


### Shopping cart
if(!isset($cart) || !$cart)
{
	if(!isset($_SESSION['cart']) || $_SESSION['cart'] === null)
	{
		$_SESSION['cart'] = new ShoppingCart();
	}
	$cart = $_SESSION['cart'];
}

if(isset($_GET['buy']) && isset($_GET['amount']))
{
	$article = $_GET['buy'];
	$amount = $_GET['amount'];
	if($article && $amount)
	{
		$cart->addItem($article, $amount);
	}

	echo $cart->size();
}
else
{
	include('header.php');
	$console = get_param('console', 0);
	include('topNav.php');
	include('asideNav.php');

	$cart->render();

	include('footer.php');
}

?>

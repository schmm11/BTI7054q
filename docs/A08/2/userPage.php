<?php 
	include "functions.php";
	require_once "db.inc.php";
	require_once "Product.php";
	$console = get_param('console', '0');

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
	
	if($_COOKIE["language"] == 'de'){
		$titel = 'Login';
		$text = "Bitte loggen Sie sich ein";
	}
	if($_COOKIE["language"] == 'fr'){
		$titel = 'log-in';
		$text = '';
	}

?>

<article>
	<h1>Hello <?php echo $_SESSION["user"];?></h1>



</article>
<?php
    include "footer.php";
?>

    
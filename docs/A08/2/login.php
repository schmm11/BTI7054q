<?php 
	include "header.php";
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
	<h1><?php echo $text ?></h1>
	
	<form action="userPage.php" method="post">
<p>
<label>Login</label>
<input name="login">
</p>
<p>
<label>Password</label>
<input type="password" name="pw">
</p>
<p>
<input type="submit" value="Login">
</p>
</form>

<h2> Noch kein Account?</h2>
<p> dann melden Sie sich <a href ="register.php">hier</a> an.</p>





</article>
<?php
    include "footer.php";
?>

    
<?php 
	require_once('autoloader.php');
	$console = get_param('console', '0');

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
	
	if($_COOKIE["language"] == 'de'){
		
	}
	if($_COOKIE["language"] == 'fr'){
		
	}

?>

<article>
	<h1>Hello <?php echo $_SESSION["user"];?></h1>



</article>
<?php
    include "footer.php";
?>

    
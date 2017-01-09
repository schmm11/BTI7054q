<?php
	require_once('autoloader.php');
	include "authentication.inc.php";
	$console = get_param('console', '0');

	include "header.php";

	include "topNav.php";
	include "asideNav.php";

if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"])
{
	?>
	<p>
		<h1>Welcome <?php echo $_SESSION["user"];?></h1>
	</p>
	<?php
}

include "footer.php";
?>


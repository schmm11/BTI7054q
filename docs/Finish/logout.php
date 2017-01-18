<?php
	include_once('authentication.inc.php');
	$_SESSION = [];
	setcookie(session_name(), '', 1);

	require_once('autoloader.php');
	include "header.php";
	$console = get_param('console', '0');

	include "topNav.php";
	include "asideNav.php";
?>

<article>
	<p><?php echo $resource->tr('user.logout.success'); ?></p>
</article>

<?php

include('footer.php');

?>
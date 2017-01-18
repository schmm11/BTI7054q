<?php

require_once('autoloader.php');

include 'header.php';
$console = get_param('console', 0);

include 'topNav.php';
include 'asideNav.php';

?>

<article>
	<h1><?php echo $resource->tr('links.login'); ?></h1>
	<table>
	<form action="userPage.php" method="post">
		<tr>
			<td><label>Login</label></td>
			<td><input type="text" name="login" /></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="password" name="pw" /></td>
		</tr>
		<tr>
			<td><input type="submit" value="Einloggen" /></td>
		</tr>
		</table>
	</form>
	
	<h2><?php echo $resource->tr('login.noaccount'); ?></h2>
	<p><?php echo $resource->tr('login.registerhere'); ?></p>
</article>

<?php

include "footer.php";

?>


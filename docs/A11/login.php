<?php

require_once('autoloader.php');

include 'header.php';
$console = get_param('console', 0);

include 'topNav.php';
include 'asideNav.php';

?>

<article>
	<h1><?php echo $resource->tr('links.login'); ?></h1>

	<form action="userPage.php" method="post">
		<p>
			<label>Login</label>
			<input type="text" name="login" />
		</p>
		<p>
			<label>Password</label>
			<input type="password" name="pw" />
		</p>
		<p>
			<input type="submit" value="Einloggen" />
		</p>
	</form>

	<h2><?php echo $resource->tr('login.noaccount'); ?></h2>
	<p><?php echo $resource->tr('login.registerhere'); ?></p>
</article>

<?php

include "footer.php";

?>


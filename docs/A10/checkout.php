<?php
	require_once('autoloader.php');
	$console = get_param('console', '0');

    include_once "header.php";

    include_once "topNav.php";
    include_once "asideNav.php";

	$parametersURL = "console=$console";
?>

<article>

    <h1><?php echo $resource->tr('checkout.title')?></h1>
	<p> <?php echo $resource->tr('checkout.text')?></p>
	<form action="buySucess.php" method="post">
		<table>
		<tr>
			<td><label> Name: </label></td>
			<td> <?php echo $_SESSION['user'] ?></td>
		</tr>
			<tr>
				<td><label>Adress</label></td>
				<td><input type="text" name="adress"/>	</td>
			</tr>
		</table>
		<input type="submit" value="<?php echo $resource->tr('checkout.confirm') ?>" />
	</form>


</article>
<?php
    include_once "footer.php";
?>


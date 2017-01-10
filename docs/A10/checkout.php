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
			<td><label><?php echo $resource->tr('adress.street') ?>: </label></td>
			<td><input type="text" name="street" value="<?php echo isset($_COOKIE["street"]) ? $_COOKIE["street"] : "";?>" required />	</td>
		</tr>
		
		<tr>
			<td><label><?php echo $resource->tr('adress.streetnumber') ?>: </label></td>
			<td><input type="number" name="streetnumber" value="<?php echo isset($_COOKIE["streetnumber"]) ? $_COOKIE["streetnumber"] : "";?>" required />	</td>
		</tr>
		
		<tr>
			<td><label><?php echo $resource->tr('adress.plz') ?>: </label></td>
			<td><input type="number" name="plz" value="<?php echo isset($_COOKIE["plz"]) ? $_COOKIE["plz"] : "";?>" required />	</td>
		</tr>
		
		<tr>
			<td><label><?php echo $resource->tr('adress.town') ?>: </label></td>
			<td><input type="text" name="town" value="<?php echo isset($_COOKIE["town"]) ? $_COOKIE["town"] : "";?>" required/>	</td>
		</tr>
		</table>
		<br><br>
		<p> <?php echo $resource->tr('checkout.confirmText') ?> </p>
		<input type="submit" value="<?php echo $resource->tr('checkout.confirm') ?>" />
	</form>


</article>
<?php
    include_once "footer.php";
?>



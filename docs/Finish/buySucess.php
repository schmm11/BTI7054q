<?php
	require_once('autoloader.php');
	$console = get_param('console', '0');

    include_once "header.php";

    include_once "topNav.php";
    include_once "asideNav.php";

	$parametersURL = "console=$console";
	
	
	/* Save POST Data to Cookies */
	$t = time()+60*60*24*30; // expires in 30 days
	setcookie("street", $_POST["street"], $t);
	setcookie("streetnumber", $_POST["streetnumber"], $t);
	setcookie("plz", $_POST["plz"], $t);
	setcookie("town", $_POST["town"], $t);
	
	$username = $_SESSION['user'];
	
	$user = User::getUserByName($username);
	$email = $user->getMail();
	
	
	// Send Buy Sucess Mail to User
	$betreff = 'Ihr Einkauf im Gameshop';
	$nachricht = 'Hallo '.$username.' </br> Vielen Dank für Ihren Einkauf. Die Ware wird asap geliefert.';
	$header = 'From: webmaster@gameshop.ch'."\r\n".'Reply-To: dont@reply.com'."\r\n".'X-Mailer: PHP/' . phpversion();
	mail($email, $betreff, $nachricht, $header);
	
	// Send Buy Mail to Admin
	$empfaenger = 'admin@gamewebshopbfh.ch';
	$betreff = 'Einkauf wurde getaetigt';
	$nachricht = 'Hi Admin </br> Der User '.$username.' hat eingekauft.';
	$header = 'From: webmaster@gameshop.ch'."\r\n".'Reply-To: dont@reply.com'."\r\n".'X-Mailer: PHP/' . phpversion();
	mail($empfaenger, $betreff, $nachricht, $header);
	
	
	
	
?>

<article>

    <h1><?php echo $resource->tr('buySucess.title')?></h1>
	<p> <?php echo $resource->tr('buySucess.text')?></p>
	
	<table>

		<tr> <?php echo $_SESSION['user'] ?> <br></tr>
		<tr> <?php echo $_POST['street']." ". $_POST['streetnumber'] ?> <br></tr>
		<tr><?php echo $_POST['plz']." ". $_POST['town'] ?> <br></tr>
	</table>
	<p> Es wurde eine Bestätigungsmail an ihre Mailadresse <?php echo $email ?> geschickt. </p>
	
	

</article>
<?php
    include_once "footer.php";
?>



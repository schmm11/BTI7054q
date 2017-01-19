<?php
require_once('autoloader.php');

$username = (isset($_POST["username"]) ? $_POST["username"] : null);
$password = (isset($_POST["password"]) ? $_POST["password"] : null);
$email = (isset($_POST["email"]) ? $_POST["email"] : null);

if($username && $password && $email)
{
	User::createUserByName($username, $password, $email);
	
	// Send Mail to registered User
	$empfaenger = $email;
	$betreff = 'Registriert im Webshop';
	$nachricht = 'Sie wurden erfolgreich im GameWebshop mit dem Nickname: '.$username.' registriert';
	$header = 'From: webmaster@gameshop.ch' . "\r\n" .
    'Reply-To: dont@reply.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($empfaenger, $betreff, $nachricht, $header);
	
	header("Location: /login.php"); 
	
}

include 'header.php';
include 'topNav.php';
$console = get_param('console', '0');
include 'asideNav.php';

?>

<article>
	<h1>Kontoregistrierung</h1>

	<form action="register.php" method="post">
		<table>
			<tr>
				<td>
					<label>Benutzername</label>
				</td>
				<td>
					<input type="text" name="username" required/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Passwort</label>
				</td>
				<td>
					<input type="password" name="password" required/>
				</td>
			</tr>
			<tr>
				<td>
					<label>E-Mail</label>
				</td>
				<td>
					<input type="email" name="email" required/>
				</td>
			</tr>
		</table>
		<input type="submit" value="Konto erstellen" />
	</form>
</article>

<?php
?>
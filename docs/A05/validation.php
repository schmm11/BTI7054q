<?php
$success = true;
$name = $email = '';

if (empty($_POST['name'])) {
	$success = false;
} else $name = $_POST['name'];

if (empty($_POST['email']) ||
	!filter_var($_POST['email'],
	FILTER_VALIDATE_EMAIL)) {
	$success = false;
} else $email = $_POST['email'];

if ($success)
	echo "<p>Success!</p>";
else
	echo "<p>Something went wrong!</p>";
exit;
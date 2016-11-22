<?php 
	require_once('autoloader.php');
	include "header.php";
	$console = get_param('console','0');


    include "topNav.php";
    include "asideNav.php";
	
	if($_COOKIE["language"] == 'de'){
		$helloText = 'Willkommen in unserem Shop';
	}

	if($_COOKIE["language"] == 'fr'){
		$helloText = 'Bienvenue sur notre site';
	}
	
    ?>
    <article>
    
        <h1><?php echo $helloText?></h1>
        <p> and Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomecomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcomeand Welcome</p>
   
    </article>
<?php
    include "footer.php";
?>

    
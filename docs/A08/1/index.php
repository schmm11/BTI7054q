<?php 
	include "functions.php";
	$language = get_param('lang', 'de');
	$console = get_param('console','all');

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
	
	if($language == 'de'){
		$helloText = 'Willkommen in unserem Shop';
	}

	if($language == 'fr'){
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

    
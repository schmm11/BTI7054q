<?php 
	include "functions.php";
	$language = get_param('lang', 'de');
	$pageId = get_param('id', 0);

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
?>
	<article>
    <h1> Vielen Dank für die Bestellung<h1>
	
	<p> ihre Daten: <br>
	Name: <?php echo $_POST["name"]; ?> </br>
	Mail: <?php echo $_POST["email"]; ?> </br></br>
	
    
	
	</article>
<?php
    include "footer.php";
	
?>
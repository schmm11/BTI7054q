<?php 
	include "functions.php";
	$language = get_param('lang', 'de');
	$console = get_param('console', 'all');
	$pageId = get_param('id', 0);

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
	
	if($language == 'de'){
		$titel = 'Releases';
		$text = "Diese Seite ist sortiert nach $console Titeln , sortiert nach Veröffentlichung.";
	}
	if($language == 'fr'){
		$titel = 'Nouveau';
		$text = 'La meme pour la france';
	}
?>

<article>
    
        <h1><?php echo $titel ?> </h1>
	<p> <?php echo $text ?> </p>
	
	




</article>
<?php
    include "footer.php";
?>

    
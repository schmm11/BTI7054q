<?php 
	include_once "functions.php";
	$language = get_param('lang', 'de');
	$console = get_param('console', 'all');
	//$pageId = get_param('id', 0);

    include_once "header.php";

    include_once "topNav.php";
    include_once "asideNav.php";
	
	if($language == 'de'){
		$titel = 'Beliebt';
		$text = "Diese Seite ist sortiert nach $console Titeln , sortiert nach Verkaufsrang.";
	}
	if($language == 'fr'){
		$titel = 'Best-seller';
		$text = 'La meme pour la france';
	}
?>

<article>
    
        <h1><?php echo $titel ?> </h1>
	<p> <?php echo $text ?> </p>
	
	




</article>
<?php
    include_once "footer.php";
?>

    
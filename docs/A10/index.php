<?php 
	require_once('autoloader.php');
	include "header.php";
	$console = get_param('console','0');


    include "topNav.php";
    include "asideNav.php";
	
    ?>
    <article>
    
        <h1><?php echo $resource->tr('text.welcomeTitle')?></h1>
        <p> <?php echo $resource->tr('text.welcomeText')?></p>
   
    </article>
<?php
    include "footer.php";
?>

    
<?php 
	include "functions.php";
	$language = get_param('lang', 'de');
	$pageId = get_param('id', 0);

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
    
    include "mainContent.php";
    
    include "footer.php";
?>

    
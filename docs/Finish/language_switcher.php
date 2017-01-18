<?php
$lang = "de";
if( isset( $_POST["lang"] ) ) {
    $lang = $_POST["lang"];
    setcookie ( 'language', $lang, time() + 60*60*24*60);
		$loc = (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php');
    header( "Location: $loc" );
}

?>
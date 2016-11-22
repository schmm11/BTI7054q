<?php
$lang = "de";
if( isset( $_POST["lang"] ) ) {
    $lang = $_POST["lang"];
    setcookie ( 'language', $lang, time() + 60*60*24*60);
    header( "Location: index.php" );
}

?>
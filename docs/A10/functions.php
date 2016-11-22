<?php
function get_param($name, $default) {
	if (!isset($_GET[$name])){
	return $default;
	}
	return urldecode($_GET[$name]);
}

function consoleIdToString($consoleId){
	if($consoleId == 0) return "Alle";
	if($consoleId == 1) return "PC";
	if($consoleId == 2) return "Xbox";
	if($consoleId == 3) return "Playstation";
}
function consoleStringToId($console){
	if($console == "PC") return 1;
	if($console == "XBOX") return 2;
	if($console == "PS4") return 3;
	else return null;
}



function add_param($url, $name, $value) {
	if(strpos($url, '?') !== false){	
		$sep = '&';	
	// Replace existing GET Param 
		//comment: Strpos -1 because the &
	
		if(strpos($url, $name) !== false){	
			$newUrl = substr($url,0, strpos($url,$name)-1);
			return add_param($newUrl, $name, $value);
		}
	}
	else {
		$sep = '?';
	}
	return $url . $sep . $name . "=" . urlencode($value);
}

function languages($language, $pageId) {
	$languages = array('de','fr', 'en');
	$urlbase = add_param($_SERVER['PHP_SELF'], 'id', $pageId);
	foreach( $languages as $l) {
		$class = $language == $l ? 'active' : 'inactive';
		echo '<a class="'.$class.'" href="';
		echo add_param($urlbase,'lang', $l).'">';
		echo strtoupper($l).'</a>';
	}
}

function t($key) {
	global $language;
	$texts = array(
	'page' => array(
	'de'=>'Seite',
	'fr'=>'Page',
	'en'=>'Page' ),
	'content' => array(
	'de'=>'Willkommen auf der Seite ',
	'fr'=>'Bienvenue à la page ',
	'en'=>'Welcome to the page '));
	return isset($texts[$key][$language])
	? $texts[$key][$language]
	: "[$key]";
}

function content($pageId) {

	if( $pageId == 11){
			include 'ProductBuy.php';
	}
	else if ($pageId == 1) 
	{
			include 'bestseller.php';
	}
	else {
	echo t('content') . " $pageId";
	}
}
?>
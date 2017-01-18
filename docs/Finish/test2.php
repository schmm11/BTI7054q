<?php

setcookie('language', 'en', (int) (time() * 60));

///*
// --- This will display InvalidTranslation(links.login, )
require_once('autoloader.php');

$resource = (isset($_COOKIE['language']) ? new Resource($_COOKIE['language']) : new Resource());

echo $resource->tr('some-key') . '<br />';
echo $resource->tr('some-key') . '<br />';
//*/

echo PHP_VERSION;

/*
// --- This will display InvalidTranslation(links.login, en)
require_once('Resource.php');

echo Resource::tr('some-key') . '<br />';
*/

?>
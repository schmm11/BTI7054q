<?php
$success = true;


if (isset($_POST['button_game'])) {
		
	$game_name = strip_tags($_POST['game_name']);
	$game_description = strip_tags($_POST['game_description']);
	$game_category = strip_tags($_POST["game_category"]);
	$game_manufacturer = strip_tags($_POST['game_manufacturer']);
	$game_releaseDate = strip_tags($_POST['game_releaseDate']);


	echo $game_name."<br>";
	echo $game_description."<br>";
	echo $game_category."<br>";
	echo $game_manufacturer."<br>";
	echo $game_releaseDate."<br>";
	echo "<br>";
	echo $_POST['button_game'];
}
else if (isset($_POST['button_product'])){
	$game_id = strip_tags($_POST['product_gameId']);
	$product_console = strip_tags($_POST['product_console']);
	$product_price = strip_tags($_POST['product_price']);
	$product_version = strip_tags($_POST['product_edition']);
	
	echo $game_id."<br>";
	echo $product_console."<br>";
	echo $product_price."<br>";
	
}
	
	
	
	
if($success)
	echo "<p>Success!</p>";
else
	echo "<p>Something went wrong!</p>";

?>
<?php
$success = false;
$message = "Message:";


if (isset($_POST['button_game'])) {
		
	$game_name = strip_tags($_POST['game_name']);
	$game_description = strip_tags($_POST['game_description']);
	$game_category = strip_tags($_POST["game_category"]);
	$game_manufacturer = strip_tags($_POST['game_manufacturer']);
	$game_releaseDate = strip_tags($_POST['game_releaseDate']);

	if((Product::addNewGame($game_name, $game_description, $game_category, $game_manufacturer, $game_releaseDate)) == 1){
		$success = true;
	}
	
	
	/*
	Game Cover Image
	*/
	$target_dir = "media/productImages/";
	$imageFileType = pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION);
	// Image wird umbennant nach game_name
	$target_file = $target_dir . $game_name."." .$imageFileType ;
	$uploadOk = 1;
	
	 pathinfo($target_file,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			$message = $message. "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			$message = $message. "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		$message = $message. "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size <5MB
	if ($_FILES["fileToUpload"]["size"] > 5000000) {
		$message = $message. "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "png") {
		$message = $message. "Sorry, only PNG files are allowed.";
		$uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$message = $message. "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$message = $message. "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			$message = $message. "Sorry, there was an error uploading your file.";
		}
	}	
}




// Add Product
else if (isset($_POST['button_product'])){
	$game_id = strip_tags($_POST['product_gameId']);
	$product_console = strip_tags($_POST['product_console']);
	$product_price = strip_tags($_POST['product_price']);
	$product_edition = strip_tags($_POST['product_edition']);

	
	if((Product::addNewProduct($game_id, $product_console, $product_price, $product_edition)) == 1){
		$success = true;
	}
	
}

if (isset($_POST['button_game']) || isset($_POST['button_product'])) {	
	if($success)
		echo "<script>alert('Eintrag war erfolgreich! <br>".$message." ');</script> ";
	else
		echo "<script>alert('Something went wrong');</script> ";
}

?>
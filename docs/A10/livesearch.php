<?php
	require_once "db.inc.php";
	require_once "Product.php";
	require_once "functions.php";
	
	// @ Cause of the silly notices acout q not defined
	@search();

function search(){
$allProducts = Product::getAllProducts();

//get the q parameter from URL
$q=$_GET["q"];


//lookup all Products if length of q>0
if (strlen($q)>0) {
  $hint="";
  foreach($allProducts as $p){
		
		$text = $p->getName();
		
		
		 if (stristr($text,$q)) {
		 
			if ($hint=="") {
			  $hint="<a href=article.php?article=" .
			  $p->getID().
			  "' target='_blank'>" .
			  $text . " ".$p->getConsole()."</a>";
			} else {
			  $hint=$hint . "<br /><a href=article.php?article=" .
			  $p->getID().
			   "' target='_blank'>" .
			  $text . " ".$p->getConsole()."</a>";
			}
		}
	}
	
	// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
}
	
	
	
}



	



?> 
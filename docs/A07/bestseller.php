<?php 
	require "Product.php";
	include "functions.php";
	$language = get_param('lang', 'de');
	$pageId = get_param('id', 0);

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
?>

<article>
    
        <h1>Bestseller</h1>
<?php
$db = new mysqli("127.0.0.1", "root", "", "webshop");
if($db->connect_errno > 0){
die("Unable to connect to database [".$db->connect_error."]");
}
if(!$result = $db->query("SELECT * FROM products;")){
die("There was an error running the query [".$db->error."]");
}
echo "<table>";

while($student = $result->fetch_assoc()){
	
echo $student["id"]." " .$student["name"]."<br />";

}
$db->close();		
echo "</table>"		
		
?>


<?php
	$products = array();
	$products = Product::getProducts();
	echo $products;



?>
</article>
<?php
    include "footer.php";
?>

    
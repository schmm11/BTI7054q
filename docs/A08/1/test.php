<?php 
	include "functions.php";
	require_once "db.inc.php";
	require_once "Product.php";
	$language = get_param('lang', 'de');
	$console = get_param('console', 'all');
	$pageId = get_param('id', 0);

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
	
	if($language == 'de'){
		$titel = 'Test';
	}
	if($language == 'fr'){
		$titel = 'la teste';
	}	
	$parametersURL = "lang=$language&console=$console";
	$products = Product::getProducts($console);
?>

<article>
    
        <h1><?php echo $titel ?> </h1>
		
		<table class ="ListTable"> 
			<tr>
				<th> ID </th><th> Name </th><th> Console </th> <th> Category </th><th> Price </th><th> ... </th>
			</tr>
		
		
		<?php 
		
		
		foreach($products as $p){
			echo "<tr>";
			echo "<td>".$p->getId()."</td>";
			echo "<td>".$p->getName()."</td>";
			echo "<td>".$p->getConsole()."</td>";
			echo "<td>".$p->getCategory()."</td>";
			echo "<td>".$p->getPrice()."</td>";
			echo "<td><a href='article.php?article=".$p->getId()."&".$parametersURL."'>Produktseite</a></td>";
			echo "</tr>";
		}
		?>

	</table>

</article>
<?php
    include "footer.php";
?>

    
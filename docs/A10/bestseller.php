<?php 
	require_once('autoloader.php');
	$console = get_param('console', '0');

    include_once "header.php";

    include_once "topNav.php";
    include_once "asideNav.php";
	
	if($_COOKIE["language"] == 'de'){
		$titel = 'Beliebt';
		$text = "Diese Seite ist sortiert nach ".consoleIdToString($console)." Titeln , sortiert nach Verkaufsrang.";
	}
	if($_COOKIE["language"] == 'fr'){
		$titel = 'Best-seller';
		$text = 'La meme pour la france';
	}
	
	$parametersURL = "console=$console";
	$groupBy = 'product.sold_units DESC';
	$products = Product::getProducts($console, $groupBy);
?>

<article>
    
        <h1><?php echo $titel ?> </h1>
	<p> <?php echo $text ?> </p>
	
	<table class ="ListTable"> 
			<tr>
				<th> ID </th><th> Name </th><th> Console </th> <th> Category </th><th>Release Date</th><th> Price </th><th> ... </th>
			</tr>
		
		
		<?php 
		
		
		foreach($products as $p){
			echo "<tr>";
			echo "<td>".$p->getId()."</td>";
			echo "<td>".$p->getName()."</td>";
			echo "<td>".$p->getConsole()."</td>";
			echo "<td>".$p->getCategory()."</td>";
			echo "<td>".$p->getReleaseDate()."</td>";
			echo "<td>".$p->getPrice()."</td>";
			echo "<td><a href='article.php?article=".$p->getId()."&".$parametersURL."'>Produktseite</a></td>";
			echo "</tr>";
		}
		?>

	</table>




</article>
<?php
    include_once "footer.php";
?>

    
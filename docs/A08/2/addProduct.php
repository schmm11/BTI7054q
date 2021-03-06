<?php 
	include_once "functions.php";
	require_once "db.inc.php";
	require_once "Product.php";
	$language = get_param('lang', 'de');
	$console = get_param('console', '0');

    include_once "header.php";

    include_once "topNav.php";
    include_once "asideNav.php";

	
	$parametersURL = "lang=$language&console=$console";
	$groupBy = 'product.sold_units';
	
	
	require_once "submitGame.php";
?>


<article>
    
        <h1>Add a new Game or Gameversion</h1>
	<h2>Add a new Game:</h2>
	
	<table>
	<form method="post">>
	<tr> <td>Game name:</td><td> <input type = "text" name ="game_name" maxlength="30" required></td></tr>
	<tr><td>Description: </td><td><input type ="text" name = "game_description" required></td></tr>
	<tr><td>	Category:</td><td> 
	<select name="game_category">
		<option value="1" >Sport</option>
		<option value="2">Taktik</option>
		<option value="3">Adventure</option>
		<option value="4">Shooter</option>
	</select> </td></tr>
	<tr><td>Manufactrurer: </td><td><input type ="text" name = "game_manufacturer" maxlength="30" required></td></tr>
	<tr><td>	Release Date: </td><td><input type="date" name="game_releaseDate" value="2016-12-10" required></td></tr>
	<tr><td><input type="submit" name="button_game" value="Submit new Game" action="submitGame.php"></td></tr>
	</form>
	</table>
	
		<br>
		
		<h2>Add a new Product</h2>
	<table>
	<form method="post">
	
	
	<tr><td>Game ID Auswahl: </td><td> <select name="product_gameId"> <?php getGameList(); ?> </select></td></tr>
	<tr><td>Konsole: </td><td> <select name="product_console">
		<option value="1" >PC</option>
		<option value="2">XBOX</option>
		<option value="3">PS-4</option>
		</select> </td></tr>
	<tr><td>Price: </td><td><input name="product_price" type="number" step="0.05" min="0" required></td>	
	<tr><td>Edition: </td><td><input name="product_edition" value="Standard" required></td></tr>
	<tr><td><input type="submit" name="button_product" value="Submit new Product" action="submitGame.php"></td></tr>

	</form>
	</table>

</article>
<?php

function getGameList(){
	$games = Product::getGameList();

	foreach($games as $g){
		echo '<option value="'.$g->getGameId(),'" >'.$g->getName().'</option>';
	}
}




    include_once "footer.php";
?>

    
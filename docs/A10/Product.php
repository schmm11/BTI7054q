<?php
class Product {
	private $id, $consoleId, $game_id, $name, $description, $console, $category, $price, $releaseDate;
	
	
	public function getId() {
		return $this->id;
	}
	public function getGameId(){
		return $this->game_id;
	}
		public function getConsoleId(){
		return $this->consoleId;
	}
	
	public function getName() {
		return $this->name;
	}
	public function getDescription(){
		return $this->description;
	}
	public function getConsole() {
		return $this->console;
	}
	public function getCategory() {
		return $this->category;
	}
	public function getPrice() {
		return $this->price;
	}	
	public function getReleaseDate() {
		return $this->releaseDate;
	}
	
	public function __toString(){
		return $this->name;
	}



static public function getProducts($filter = '0', $groupBy = 'game.id') {
	$products = array();
	
	$sqlStatement = "SELECT 
			product.id as id,
			product.console_id as consoleId,
			game.name AS name,
			game.description AS description,
			console.name AS console,
			category.name AS category,
			price AS price,
			game.releaseDate as releaseDate 
		FROM product 
		LEFT JOIN game ON game.id = product.game_id 
		LEFT JOIN console ON console.id = product.console_id
		LEFT JOIN category ON category.id = game.category
		";
	
	/* Add the Filter if needed*/
	if($filter !== '0'){
		$sqlStatement = $sqlStatement."WHERE console.id =".$filter ;
	}
	
	/*Add the Group by */
	$sqlStatement = $sqlStatement." GROUP BY ".$groupBy.", product.id";
	
	
	$res = DB::doQuery(
		$sqlStatement
		
	);
	if (!$res) return null;
	while ($product = $res->fetch_object(get_class()))
	$products[] = $product;
	return $products;
}
	
static public function getProductById($id) {
		$id = (int) $id; // NEEDS to get Safe => Injection
		$res = DB::doQuery("SELECT 
			product.id as id,
			product.console_id AS consoleId,
			product.game_id AS game_id,
			game.name AS name,
			game.description AS description,
			console.name AS console,
			category.name AS category,
			price AS price 
			
		FROM product 

		LEFT JOIN game ON game.id = product.game_id 
		LEFT JOIN console ON console.id = product.console_id
		LEFT JOIN category ON category.id = game.category
		WHERE product.id = $id" 
		);
	if (!$res) return null;
		return $res->fetch_object(get_class());
}
//Get a List of all games with theyr ID's
static public function getGameList(){
	$games = array();
	
	$sqlStatement = "SELECT
			game.id as game_id,
			game.name AS name
		FROM game";
		
	$res = DB::doQuery(
		$sqlStatement	
	);
	if (!$res) return null;
	while ($game = $res->fetch_object(get_class()))
	$games[] = $game;
	return $games;
}
// Get all GameVersions of one product
static public function getGameVersions($game_id) {
	$games = array();
	
		$id = (int) $game_id; // NEEDS to get Safe => Injection
		$res = DB::doQuery("SELECT 
			product.id as id,
			product.console_id AS consoleId,
			game.name AS name,
			game.description AS description,
			console.name AS console,
			category.name AS category,
			price AS price 
			
		FROM product 

		LEFT JOIN game ON game.id = product.game_id 
		LEFT JOIN console ON console.id = product.console_id
		LEFT JOIN category ON category.id = game.category
		WHERE product.game_id = $id" 
		);
		if (!$res) return null;
	while ($game = $res->fetch_object(get_class()))
	$games[] = $game;
	return $games;
}



//Add a New Game
static public function addNewGame($game_name, $game_description, $game_category, $game_manufacturer, $game_releaseDate){
	
$res = DB::doQuery("INSERT INTO game (
		id, name, description, category, manufacturer, releaseDate) VALUES (
		NULL, '$game_name', '$game_description', $game_category, '$game_manufacturer', '$game_releaseDate');"		 
		);	
	return $res;
}	

// Add new Product version
static public function addNewProduct($game_id, $product_console, $product_price, $product_edition){
	
	$res = DB::doQuery("INSERT INTO product (
		id, game_id, console_id, price, sold_units, description) VALUES (
		NULL, '$game_id', '$product_console', '$product_price', 0, '$product_edition');"		 
		);	
	return $res;
}
	
	

static public function getAllProducts() {
	$products = array();
	
	$sqlStatement = "SELECT 
			product.id as id,
			product.console_id AS consoleId,
			game.name AS name,
			game.description AS description,
			console.name AS console,
			category.name AS category,
			price AS price,
			game.releaseDate as releaseDate 
		FROM product 
		LEFT JOIN game ON game.id = product.game_id 
		LEFT JOIN console ON console.id = product.console_id
		LEFT JOIN category ON category.id = game.category
		";
	
	
	$res = DB::doQuery(
		$sqlStatement
		
	);
	if (!$res) return null;
	while ($product = $res->fetch_object(get_class()))
	$products[] = $product;
	return $products;
}

}
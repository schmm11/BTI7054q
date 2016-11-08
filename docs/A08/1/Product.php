<?php
class Product {
	private $id, $name, $description, $console, $category, $price;
	
	
	public function getId() {
		return $this->id;
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
	
	public function __toString(){
		return $this->name;
	}

	static public function getProducts($filter = 0) {
	$products = array();
	
	$sqlStatement = "SELECT 
			product.id as id,
			game.name AS name,
			game.description AS description,
			console.name AS console,
			category.name AS category,
			price AS price 
			
		FROM product 

		LEFT JOIN game ON game.id = product.game_id 
		LEFT JOIN console ON console.id = product.console_id
		LEFT JOIN category ON category.id = game.category
		WHERE console.id = 3";
		
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

/*

	Definition of the SQL Querys


*/

/*GETS all Products without filter*/


}
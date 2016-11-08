<?php
require "dbconnect.php";

class Product {
private $id, $name, $category, $selled, $description;

public function __toString(){
return sprintf("%d) %s, %d",
$this->id, $this->name(), $this->category);
}

static public function getProducts() {
	$products = array();
	$res = DB::doQuery(
	"Select * from product");
	if (!$res) return null;
	while ($products = $res->fetch_object(get_class()))
	$products[] = $product;
	return $products;
}

static public function getProductsById($id) {
	$products = array();
	$res = DB::doQuery(
	"Select * from product");
	if (!$res) return null;
	while ($products = $res->fetch_object(get_class()))
	$products[] = $product;
	return $products;
}
}
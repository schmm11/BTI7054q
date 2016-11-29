<?php
class Cart {
private $items = [];


function __construct(){
	
	
	
}


public function removeItem($item, $num) {
	if (!isset($this->items[$item])) return;
	$this->items[$itemitem] -= $num;
	if ($this->items[$item] <= 0)
	unset($this->items[$item]);
}
public function getItems() {
	return $this->items;
}



public function addItem($item, $num) {
	if (!isset($this->items[$item])){
		$this->items[$item] = 0;
	}
	$this->items[$item] += $num;
}

public function isEmpty() {
	return count($this->items) == 0;
}
public function countItem(){
	return count($this->items);
}

public function render(){
	if ($this->isEmpty()) {
		echo "Empty Cart";
		return;
	}
	echo "Has Items...";
	
	
}

}
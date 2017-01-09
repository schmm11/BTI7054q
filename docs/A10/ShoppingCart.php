<?php

require_once('autoloader.php');

final class ShoppingCart
{
	private $items = [];

	public function getItems()
	{
		return $this->$items;
	}

	/** adds a specific item to the cart, default amount: 1 */
	public function addItem($item, $num = 1)
	{
		if(!isset($this->items[$item]) || ($this->items[$item] > 0))
		{
			$this->items[$item] = 0;
		}

		$this->items[$item] += $num;
	}

	/** returns the amount of items contained in the cart */
	public function size()
	{
		$count = 0;
		foreach($this->items as $item => $num)
		{
			$count += $num;
		}

		return $count;
	}
	/** return the total cost of all the items */
	public function getTotalCost(){
		static $cost = 0; 
			foreach($this->items as $item => $amount)
			{
				$product = Product::getProductById($item);
				$cost += $product->getPrice()*$amount;
			}
		return $cost;
	}

	/** returns whether or not the cart is empty */
	public function isEmpty()
	{
		return ($this->size() == 0);
	}

	/** renders the cart to HTML */
	public function render()
	{
		echo "<article>";
		global $resource;
		if($this->isEmpty())
		{
			echo '<p style="color: black;">' . $resource->tr('cart.empty') . '</p>';
		}
		else
		{
			?>
			<div id = "cart">
			<table>
				<tr><th>Item</th><th>Console</th><th>Amount</th> <th>Price</th><th>Decrease/Increase</th></tr>
					<?php
						static $cost = 0; 
						foreach($this->items as $item => $amount)
						{
							$product = Product::getProductById($item);
							
							echo "<tr><td>".$product->getName()."</td>
							<td>".$product->getConsole()."</td>
							<td>$amount</td>
							<td>".$product->getPrice()*$amount."</td>
							<td>
							</tr>";
						}
					?>
					<tr> </tr>
			</table>
			</div>
			<?php echo "<p>Total Cost is: ".$this->getTotalCost()."</p>";
			
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'])
			{
				echo "<li><a href=\"checkout.php\">" . $resource->tr('cart.checkout') . "</a></li>";
			}
			else
			{
				echo "<li><a href=\"login.php\">" . $resource->tr('cart.login') . "</a></li>";
			}
		}
		echo "</article>";
	}
}

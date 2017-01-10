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
		if(!isset($this->items[$item]) || ($this->items[$item] < 0))
		{
			$this->items[$item] = 0;
		}

		$this->items[$item] += $num;
	}

	/** removes a specific item from the default, default amount: 1 */
	public function removeItem($item, $num = 1)
	{
		if(isset($this->items[$item]))
		{
			if($this->items[$item] > 1)
			{
				$this->items[$item] -= 1;
			}
			else
			{
				unset($this->items[$item]);
			}
		}
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
		$cost = 0;
			foreach($this->items as $item => $amount)
			{
				$product = Product::getProductById($item);
				$cost += $product->getPrice()*$amount;
			}
		return $cost;
	}
	/** return the total amount of items */
	public function getTotalAmount(){
		$i = 0;
			foreach($this->items as $item => $amount)
			{
				$i += $amount;
			}
		return $i;
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
							<td><a class=\"cart-button\" href=\"Cart.php?inc=" . $item . "&amount=1\">+</a><a class=\"cart-button\" href=\"Cart.php?dec=" . $item . "&amount=1\">-</a></td>
							</tr>";
						}
					?>
					<tr> </tr>
			</table>
			</div>
			<?php
			echo "<p>".$resource->tr('cart.totalCost')."<b> ".$this->getTotalCost()." sFr.- </b></p>";
			echo "<p>".$resource->tr('cart.totalAmount')."<b> ".$this->size() ."</b></p>";

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

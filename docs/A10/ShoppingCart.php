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
		if(!isset($this->items[$item]))
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

	/** returns whether or not the cart is empty */
	public function isEmpty()
	{
		return ($this->size() == 0);
	}

	/** renders the cart to HTML */
	public function render()
	{
		global $resource;
		if($this->isEmpty())
		{
			echo '<p style="color: black;">' . $resource->tr('cart.empty') . '</p>';
		}
		else
		{
			?>

			<table id="cart">
				<thead>
					<tr><th>Item</th><th>Amount</th></tr>
				</thead>
				<tbody>
					<?php
						foreach($this->items as $item => $amount)
						{
							echo "<tr><td>$item</td><td>$amount</td></tr>";
						}
					?>
					<tr>
					</tr>
				</tbody>
			</table>
			<?php
		}
	}
}

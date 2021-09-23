<?php

	class ElectronicItems{
		private $items = array();

		public function __construct(array $items) {
			$this->items = $items;
		}

		public function getSortedItems() {
			$sorted = array();
			foreach ($this->items as $item) {
				$sorted[($item->price * 100)] = $item;
			}
			ksort($sorted, SORT_NUMERIC);
			return $sorted;
		}

		public function getSortedItemsbyPrice() {
			$sorted = array();
			$items = $this->items;
			foreach ($items as $item) {
				$sorted[] = $item;
				foreach($item->getExtraItems() as $extraItem) {
					$sorted[] = $extraItem;
				}
			}
			$keys = array_column($sorted, 'price');
			array_multisort($keys, SORT_ASC, $sorted);
			return $sorted;
		}

		public function getItemsByType($type) {
			if (in_array($type, EletronicItem::$types))	{
				$callback = function($item) use ($type)	{
					return $item->type == $type;
				};
				$items = array_filter($this->items, $callback);
			}
			return false;
		}

		public function getTotal() {
			$total = 0;
			foreach ($this->items as $item) {
				$total += $item->getSubtotal();
			}
			return $total;
		}

		public function printAllItems($items) {
			
			$body = "";
			foreach ($items as $item) {
				$body .= "<tr><td>". $item->getType() . "</td><td>$ " . $item->getPrice() . "</td></tr>";
			}

			$description = 
				"<table border=1>
					<thead>
						<tr>
							<th>Description</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
						$body
					</tbody>
					<thead>
						<tr>
							<th>Total</th>
							<th>$ ".$this->getTotal()."</th>
						</tr>
					</thead>
				</table>";

			return $description;
		}
	}

?>
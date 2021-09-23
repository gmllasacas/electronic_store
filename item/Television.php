<?php

	require_once("ElectronicItem.php");

	class Television extends ElectronicItem {

		private $extraItems = array();

		public function __construct($price) {
			$this->setType(self::ELECTRONIC_ITEM_TELEVISION);
			$this->setPrice($price);
			$this->setWired(true);
		}

		public function maxExtras() {
			return INF;
		}

		public function add(ElectronicItem $item) {
			$this->extraItems[] = $item;
		}

		public function getSubtotal() {
			$sum = parent::getPrice();
			foreach ($this->extraItems as $extraItem) {
				$sum += $extraItem->getPrice();
			}
			return $sum;
		}

		public function getExtraItems() {
			return  $this->extraItems;
		}
	}

?>
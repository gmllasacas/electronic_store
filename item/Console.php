<?php

	require_once("ElectronicItem.php");

	class Console extends ElectronicItem {

		private $extraItems = array();

		public function __construct($price) {
			$this->setType(self::ELECTRONIC_ITEM_CONSOLE);
			$this->setPrice($price);
			$this->setWired(true);
		}

		public function maxExtras() {
			return 4;
		}

		public function add(ElectronicItem $item) {
			if (count($this->extraItems) >= $this->maxExtras()) {
				return;
			}
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
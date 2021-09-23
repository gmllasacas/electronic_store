<?php

	require_once("ElectronicItem.php");

	class Microwave extends ElectronicItem {

		public function __construct($price) {
			$this->setType(self::ELECTRONIC_ITEM_MICROWAVE);
			$this->setPrice($price);
			$this->setWired(true);
		}

		public function maxExtras() {
			return 0;
		}

		public function getSubtotal() {
			$sum = parent::getPrice();
			return $sum;
		}

		public function getExtraItems() {
			return  [];
		}
		
	}

?>
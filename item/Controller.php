<?php

	require_once("ElectronicItem.php");

	class Controller extends ElectronicItem {

		public function __construct($price, $wired) {
			$this->setType(self::ELECTRONIC_ITEM_CONTROLLER);
			$this->setPrice($price);
			$this->setWired($wired);
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
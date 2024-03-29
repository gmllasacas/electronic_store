<?php

	abstract class ElectronicItem {
	
		public $price;
		private $type;
		public $wired;

		const ELECTRONIC_ITEM_CONSOLE = 'console';
		const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
		const ELECTRONIC_ITEM_TELEVISION = 'television';
		const ELECTRONIC_ITEM_CONTROLLER = 'controller';

		private static $types = array(
			self::ELECTRONIC_ITEM_CONSOLE,
			self::ELECTRONIC_ITEM_MICROWAVE, 
			self::ELECTRONIC_ITEM_TELEVISION, 
			self::ELECTRONIC_ITEM_CONTROLLER
		);
		
		function getPrice(){
			return $this->price;
		}

		function getType(){
			return $this->type;
		}

		function getWired(){
			return $this->wired;
		}

		function setPrice($price){
			$this->price = $price;
		}

		function setType($type){
			$this->type = $type;
		}

		function setWired($wired){
			$this->wired = $wired;
		}

		public abstract function getExtraItems();

		public abstract function getSubtotal();

		public abstract function maxExtras();

	}

?>
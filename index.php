<?php

	require_once("ElectronicItems.php");
	require_once("item/Console.php");
	require_once("item/Controller.php");
	require_once("item/Television.php");
	require_once("item/Microwave.php");

	// console 1
	$console_1 = new Console(500);
	//2 remote controllers for console 1
	$console_1->add(new Controller(100, false));
	$console_1->add(new Controller(100, false));
	//2 wired controllers for console 1
	$console_1->add(new Controller(75, true));
	$console_1->add(new Controller(75, true));

	// television 1
	$television_1 = new Television(1500);
	// 2 remote controllers for television 1
	$television_1->add(new Controller(100, false));
	$television_1->add(new Controller(100, false));

	// television 2
	$television_2 = new Television(1000);
	// 1 remote controller for television 2
	$television_2->add(new Controller(100, false));

	// microwave 1
	$microwave_1 = new Microwave(500);

	//$items = new ElectronicItems([$console_1, $television_1]);
	$items = new ElectronicItems([$console_1, $television_1, $television_2, $microwave_1]);

	echo "<pre>";
	echo "<h2>Question 1</h2>";
	echo "Sort the items by price and output the total pricing<br>";
	$sorted = $items->getSortedItemsbyPrice();
	//print_r($sorted);
	//die();
	echo $items->printAllItems($sorted);
	echo "<h2>Question 2</h2>";
	echo "Cost of the console and its controllers<br>";
	echo "$ ".$console_1->getSubtotal();

?>
<?php

class Basket {
	public $itemTotal;
	public $shippingCost;
	public $discount;

	public function calculateSubTotal() {
		$subTotal = ($this->itemTotal + $this->shippingCost) - $this->discount;
		return $subTotal;
	}
}

 $basketObject = new Basket();
 $basketObject->itemTotal = "500000";
 $basketObject->shippingCost = "40000";
 $basketObject->discount = "400";

 $subTotal = $basketObject->calculateSubTotal();
 var_dump($subTotal);

 // var_dump($basketObject);
<?php 
require('account.php');

class CheckingAccount extends Account {

	public function transfer($amount) {

		echo "Transfering ". $amount. '<br>';
	}
}

class PremiumCheckingAccount extends CheckingAccount {
	public $minimumBalance = 100;
}
?>
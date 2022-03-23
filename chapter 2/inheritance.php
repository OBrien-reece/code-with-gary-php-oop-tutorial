<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 
require("checking-account.php");

$checkingaccount = new CheckingAccount();

$checkingaccount->deposit(20);

$checkingaccount->withdraw(10);

$checkingaccount->transfer(40);

$premiumcheckingaccount = new PremiumCheckingAccount();

print_r("Minimum Balalnce ". $premiumcheckingaccount->minimumBalance);
?>

</body>
</html>
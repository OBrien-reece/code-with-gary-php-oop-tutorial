<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ENCAPSULATION</title>
</head>
<body>

<?php 

require("bid.php");

$bid = new Bid();
$bid->setBidAmount(54);

?>

<?php echo "The bid amount is ".$bid->getBidAmount();?>

</body>
</html>
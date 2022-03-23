<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MAgic Methods</title>
</head>
<body>

<?php 
require('connection.php');

$connection1 = new Connection();
$connection1->setConnectionID('127.0.0.1');
print $connection1;
// $connection2 = new Connection();
// unset($connection2);

?>

<!-- Display then value of the magic method-->
<p> <?php echo "The number of connections is " ,$connection1->getCount();?> <p>
<p> <?php echo "The conferenceID is " .$connection1->conferenceID;?> <p>
<p> <?php echo "The connectionID is " .$connection1->connectionID;?> <p>	
</body>
</html>
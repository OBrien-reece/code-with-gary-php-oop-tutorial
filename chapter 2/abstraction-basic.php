<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Abstraction</title>
</head>
<body>

<?php 

require('reservation.php');

$reservation = new Reservation();

$reservation->cancel();

?>

</body>
</html>
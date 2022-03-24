<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

require('darkskyclientapi.php');

$weatherApiClient = new DarkSkyApiClient();
$forecast = $weatherApiClient->getForecast('New York');

?>

<?php echo $forecast;?>
</body>
</html>
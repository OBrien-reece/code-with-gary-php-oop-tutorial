<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

require 'cylinder.php';

$cylinder = new Cylinder(['radius' => 5], ['height' => 10]);

$cylinderVolume = $cylinder->volume();

// print_r($cylinderVolume);

$sphere = new Sphere(['radius' => 5]);

$sphereVolume = $sphere->volume();

print_r($sphereVolume);
?>

</body>
</html>
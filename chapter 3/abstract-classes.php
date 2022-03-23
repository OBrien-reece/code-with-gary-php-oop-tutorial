<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

require('product.php');

$dataModel = new Product();

$dataModel->save();

$newUser = new User();

$newUser->save();

?>

</body>
</html>
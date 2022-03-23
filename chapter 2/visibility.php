<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VISIBILITY</title>
</head>
<body>

<?php 

require("filereader.php");

$fileProtectedReaderData = new CsvProtectedFileReader();

$filePrivateReaderData = new PrivateFileReader();
?>

<?php 
echo $fileProtectedReaderData->getProtectedFileData().'<br>'; 
echo $filePrivateReaderData->getPrivateFileData().'<br>';
?>
</body>
</html>
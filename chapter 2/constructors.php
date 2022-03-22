<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

require "comments.php";

$comment = new Comment('contructor', 1);

// echo $comment->text. $comment->userID;

echo "<p> This is the number ".$comment->userID." ".$comment->text." that i ever made</p>";

?>


</body>
</html>
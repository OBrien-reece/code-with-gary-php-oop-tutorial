<?php 

require_once("dataModel.php");

class Product extends DataModel {

	private string $name;
	private string $price;
	protected string $tableName = "products";
}

class User extends DataModel {

	protected string $tableName = "user products table";
}
?>
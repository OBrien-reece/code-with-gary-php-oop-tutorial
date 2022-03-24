<?php 

require_once('FileReaderInterface.php');

class CsvFileReader implements FileReaderInterface {

	public function readFileAsAssociativeArray(string $filename): array {

		//get the rows from the file as arrays

		$row = array_map('str_getcsv', file($filename));

		$header = array_shift($row);

		$items[] = array_combine($header, $row);

		return $items;
	}
}

// $fileReader = new CsvFileReader();
// $items = $fileReader->readFileAsAssociativeArray('inventory.csv');

// print_r($items);
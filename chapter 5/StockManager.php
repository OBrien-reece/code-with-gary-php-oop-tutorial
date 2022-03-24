<?php 

require_once('csvFileReader.php');

class StockManager {

	public function updateStockFromFile(string $filename, CsvFileReader $CsvFileReader) {

		$stockItems = $CsvFileReader->readFileAsAssociativeArray($filename);

		foreach ($stockItems as $stockItem) {
			   print 'Updating the database with item: ' .$stockItem['name'];
		}
	}

}
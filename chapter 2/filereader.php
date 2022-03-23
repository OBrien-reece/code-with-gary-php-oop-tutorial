<?php 
class ProtectedFileReader {

	//Protected can be accessed within the same class or the child class
	protected $data = "Some Protected Random data";

	public function getData() {
		return $this->data;
	}
}

class CsvProtectedFileReader extends ProtectedFileReader {

	public function getProtectedFileData() {
		return $this->data;
	}
}


class PrivateFileReader {

	//Private can only be accessed within the class
	private $data = "Some Private Random data";

	public function getPrivateFileData() {
		return $this->data;
	}
}
?>
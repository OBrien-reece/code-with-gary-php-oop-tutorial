<?php 

require_once('threedimensionalshape.php');

class Cylinder extends ThreeDimensionalShape {

	public function volume(): float {
		return pi() * pow($this->dimensions['radius'], 2) * $this->dimensions['height'];
	}
}

class Sphere extends ThreeDimensionalShape {

	public function volume(): float {
		return 4/3 * pi() * pow($this->dimensions['radius'], 3);
	}
}
?>
<?php 

require_once('weatherapiclientinterface.php');

class DarkSkyApiClient implements WeatherApiClientInterface {

	public function getForecast($city) {

		return "Its raining in ".$city;
	}
}

?>
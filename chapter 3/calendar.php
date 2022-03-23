<?php 

//pre defined constants

define('YEAR', 2021);

class Calendar {

	//Regular properties
	//Value should vary between objects
	public $name;
	public $seasons = ['Winter', 'Summer','Autumn','Spring'];
	public $numberOfWeeks = 365/7;
	public $year = YEAR;

	//Static properties
	//Value can change but remains same(static) for class and instances
	public static $daysInFebruary = 28;

	public static $count = 0;

	public function __construct() {
		self::$count++;
	}

	//Class Constants
	//Fixed values associated with this class
	const MONTHS_IN_YEAR = 12;

	public function getMonthsInYear () {

		return self::MONTHS_IN_YEAR;

	}

}

$calendar = new Calendar();
$calendar1 = new Calendar();
$calendar2 = new Calendar();

print_r($calendar->seasons);

print_r($calendar->numberOfWeeks);

$calendar->name = "Year Planner" .'<br>';

print $calendar->name;

print_r($calendar->year);

print Calendar::MONTHS_IN_YEAR .'<br>';

print $calendar->getMonthsInYear() .'<br>';

print Calendar::$daysInFebruary .'<br>';

Calendar::$daysInFebruary++;

print $calendar::$daysInFebruary .'<br>';

print Calendar::$count .'<br>';
?>
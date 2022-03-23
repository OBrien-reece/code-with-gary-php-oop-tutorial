<?php 

class Connection {

	/**
	 * @var string Connection Identifier
	 * */
	private string $connectionID;

	private int $conferenceID = 124;

	private static int $count = 0;

	public function __construct() {

		self::$count++;
    }

    public function __get($name) {
    	return $this->$name;
    }

    public function __toString() {
    	return "Conference ID: {$this->conferenceID} <br> Connection ID: {$this->connectionID}";
    }

    /**
     * __destruct
     * Its called when there are no other refferences to a 
     * particular object
     * or in order during the shutdown sequence
     * */
    public function __destruct() {

    	self::$count--;
    }

	public function getCount()		 {

		return self::$count;
	}

	public function setConnectionID($ipAddress) {

		if(filter_var($ipAddress, FILTER_VALIDATE_IP)) {

				$this->connectionID = $ipAddress . '_' .self::$count;

				return;
				
		}
		
		die("Not a valid Ip Address");
	}

	// public function getConnectionID() {

	// 	return $this->connectionID;
	// }
}
?>
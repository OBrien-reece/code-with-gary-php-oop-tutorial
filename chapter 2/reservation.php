<?php

class Reservation {

	private $host = "Host Class"; //Host class
	private $guest = "Guest class"; //Guest class
	//cancell
	public function cancel() {

		$this->sendCancellNotification();

		$this->refundGuest();

		echo "string
		//check whether cancellation is available<br>
		//refund the guests---if refunds applicable[Guest]<br>
		//make the room available again [Room]<br>
		//notify the host [Host]<br>
		        //In app notification<br>
		        //send them an email/sms [Email, Sms]<br>
		//send confirmation to guest<br>
		";
    }
	private function sendCancellNotification() {
		echo "Sending notification to " .$this->host .'<br>';
	}	

	private function refundGuest() {
		echo "Refunding ". $this->guest .'<br>';
	}
	
}
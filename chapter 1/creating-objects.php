<?php 
class User {
	//Creating properties
	public $name;
	public $username;
	public $followercount;
}

class SpotifyUser {
	public $profileName;
	public $followercount;
	public $numberOfSongs;
}

$mySpotify = new SpotifyUser();
$mySpotify->profileName = "O'Brien";
$mySpotify->followercount = "80";
$mySpotify->numberOfSongs = "0";

print_r($mySpotify);

$garyobject = new User();

$garyobject->name = "Evance Indeche";
$garyobject->username = "@obrien-reece";
$garyobject->followercount = "3456";

print_r($garyobject);
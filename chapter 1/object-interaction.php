<?php
class Song {
    public $songId;
    public $songTitle;
}

class Playlist {
    public $name;
    public $songs = [];

    public function addSong($song) {
        $this->songs[] = $song;
    }
}

$octopusGarden = new Song();
$octopusGarden->songId = 1;
$octopusGarden->songTitle = "Octopus Garden";

$snykz = new Song();
$snykz->songId = 2;
$snykz->songTitle = "Brocken Man";
var_dump($octopusGarden);
var_dump($snykz);

$playlist = new Playlist();
$playlist->name = "Rock";
$playlist->addSong($octopusGarden);
// var_dump($playlist->songs);
// print_r($playlist->songs);


class Sing {
    public $sing;
    public $artist;
}

class MyPlaylist {
    public $name = "2.b.d lited";
    public $songs = [];

    public function addSong($sing) {
        $this->songs = $sing;
    }
}

$theSing = new Sing();
$theSing->sing = "Is this the life I chose";
$theSing->artist = "Aryan";
// var_dump($theSing);

$myPlaylist = new MyPlaylist();
$myPlaylist->name;
$myPlaylist->songs;
$myPlaylist->addSong($theSing);
// var_dump($myPlaylist->songs);
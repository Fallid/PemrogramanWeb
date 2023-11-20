<?php
include("Controllers/SongsController.php");

use Controller\SongsController;

$songsController = new SongsController();
echo $songsController->getAllSongs();
// echo $songsController->getSongs(1);

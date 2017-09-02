<?php
$mysqli = new mysqli("localhost","root","","rent");
//$mysqli = new mysqli("localhost", "deepbratt5", "Samadder5#", "movie_ticket");
if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

SESSION_START();
error_reporting(0);
?>
<?php
		//$mysqli = new mysqli("localhost", "root", "", "rent");
		$mysqli = new mysqli("localhost", "deepbrattr", "Samadder5#", "rentalz247");
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		SESSION_START();
		ERROR_REPORTING(0);
?>
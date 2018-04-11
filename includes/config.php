<?php
	ob_start();

	$timezone = date_default_timezone_set("Asia/Bangkok");

	$con = mysqli_connect("localhost", "root", "", "spotify");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
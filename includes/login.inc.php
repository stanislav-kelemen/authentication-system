<?php
	require 'dbh.inc.php';
	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];
	if ( empty($mailuid) || empty($password) ) {
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			$result = mysqli_stmt_get_result($stmt);
					header("Location: ../index.php?login=success");
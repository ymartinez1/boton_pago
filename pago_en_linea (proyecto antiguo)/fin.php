<?php

	session_start();
	if($_SESSION["logueado"] == TRUE) {

		@session_start();
		session_destroy();
		header("Location: https://bostonacademy.cl/");

	} else {
		
		@session_start();
		session_destroy();
		header("Location: https://bostonacademy.cl/");
		
	}

?>
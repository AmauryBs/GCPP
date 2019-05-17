<?php
	session_start();

	if(!isset($_GET['route']))
		include 'connexion.php';
	switch(true) {
		case $_GET['route']=='bonsoir':
			include 'bonsoirController.php';
			include 'bonsoir.php';
		break;
		default:
			include 'connexion.php';
		break;
	}

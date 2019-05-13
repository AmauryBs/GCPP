<?php
	session_start();
	// This is an example (of an Huffman tree)
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

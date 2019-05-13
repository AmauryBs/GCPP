<?php
	session_start();
	// This is an example (of an Huffman tree)
	if(!isset($_GET['route']))
		include_once 'connexion.php';
	switch(true) {
		case $_GET['route']=='connexion':
			include_once 'connexionController.php';
		break;

		case $_GET['route']=='espace':
			include_once 'espaceController.php';
		break;

		case $_GET['route']=='page_0':
			include_once 'page_0Controller.php';
		break;

		case $_GET['route']=='page_1':
			include_once 'page_1Controller.php';
		break;

		case $_GET['route']=='page_2':
			include_once 'page_2Controller.php';
		break;

		case $_GET['route']=='page_3':
			include_once 'page_3Controller.php';
		break;

		default:
			include_once 'connexion.php';
		break;
	}

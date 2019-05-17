<?php
	session_start();

	if(!isset($_GET['route']))
		include_once 'connexion.php';
	else
	{
		switch(true) {
			case $_GET['route']=='connexion':
				include_once 'controller/connexionController.php';
			break;

			case $_GET['route']=='deconnexion':
				session_destroy();
				header('Location: .');
			break;

			case $_GET['route']=='espace':
				if (!isset($_SESSION['utilisateur']['per_id']))
					header('Location : .');
				include_once 'controller/espaceController.php';
				include_once 'espace.php';
			break;

			default:
				include_once 'connexion.php';
			break;
		}
	}

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="style_espace.css" />
	<title>GCPP- espace perso</title>
</head>
<body>
	<img src="img/logo_usmb.png"/> <img id ="polytech" src="img/logo_polytech.png"/>
	<main>
		<header>Gestion des commandes pour projets pédagogiques</header>
		<section>
			<div id="menu">
				<ul id="lemenu">
				<?php
				$encours = array(" "," "," "," ");
				$page=0;
				$user_type ="ser";
				$encours[$page] = "encours";
				echo "<li><a href=\"?page=0\" class=\"btn_menu $encours[0]\">Accueil</a></li>\n";
				if( $user_type =="etu"){
					echo "<li><a href=\"?page=1\" class=\"btn_menu $encours[1]\">Envoyer une demande</a></li>\n";
					}
				else{
					echo "<li><a href=\"?page=2\" class=\"btn_menu $encours[1]\">Demandes en attente</a></li>\n";
					}
				echo "<li><a href=\"?page=3\" class=\"btn_menu $encours[2]\">Historique
																			demandes</a></li> \n";
				echo "<li><a href=\"?page=4\" class=\"btn_menu $encours[3]\">Historique
																			commandes</a></li> \n";
				?>
				</ul>
			<div>
			<div id="contenu">
			    <?php
			    $page=0;
			    if( file_exists("page_".$page.".inc.php") ){ 
			    	include("page_".$page.".inc.php");
			   	}
			      ?>
    	</div>
		</section>
		<footer>Espace personnel</footer>
	</main>
</body>
</html>
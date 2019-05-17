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
				$encours = array(" "," "," "," "," ");
			    if( !isset($_GET["page"]) ) { 
			    	$page=0;
			    }else{
			   		$page=$_GET["page"];
			    }
			    $encours[$page] = "encours";
				$user_type ="ser";
				echo "<li><a href=\"?page=0\" class=\"btn_menu $encours[0]\">Accueil</a></li>\n";
				echo "<li><a href=\"?page=1\" class=\"btn_menu $encours[1]\">Envoyer une demande</a></li>\n";
				if( $user_type == "pro" or $user_type == "ser"){
					echo "<li><a href=\"?page=2\" class=\"btn_menu $encours[2]\">Demandes en attente</a></li>\n";
					}
				echo "<li><a href=\"?page=3\" class=\"btn_menu $encours[3]\">Historique
																			demandes</a></li> \n";
				echo "<li><a href=\"?page=4\" class=\"btn_menu $encours[4]\">Historique
																			commandes</a></li> \n";
				?>
				</ul>
			<div>
			<div id="contenu">
			    <?php
			    if( file_exists("page_".$page.".inc.php") ){ 
			    	include("page_".$page.".inc.php");
			   	}
			      ?>
    	</div>
    	<div id = "messagePHP">
    		<?php if (isset($_GET["message"])){echo $_GET["message"];} ?>
    	</div>
		</section>
		<footer>Espace personnel</footer>
	</main>
</body>
</html>
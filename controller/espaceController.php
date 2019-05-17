<?php
	switch($_GET['form']) {
		case 'demandeCreate' :
			include '../model.php';
			$demType=['Etudiant'=>'proposition','Professeur'=>'travaux','Service'=>'commande'];
			Demande::insert(['dem_type'=>$demType[get_class($_SESSION['utilisateur'])],'dem_titre'=>$_POST['titre'],'dem_message'=>$_POST['message']]);
			header('Location: .?route=espace');
		break;
		case 'demandeUpdate' :
			include '../model.php';
			$demType=['Etudiant'=>'proposition','Professeur'=>'travaux','Service'=>'commande'];
			$dem=new Demande($_POST['id']);
			$dem->dem_type=$demType[get_class($_SESSION['utilisateur'])];
			$dem->dem_titre=$_POST['titre'];
			$dem->dem_message=$_POST['message'];
			$dem->update();
			header('Location: .?route=espace');
		break;
		default: break;
	}

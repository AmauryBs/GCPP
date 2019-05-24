<?php
	if(isset($_GET['form'])) { switch($_GET['form']) {
		case 'demandeCreate' :
			include 'model/model.php';
			$demType=['etudiant'=>'proposition','professeur'=>'travaux','service'=>'commande'];
			Demande::insert(['dem_type'=>$demType[$_SESSION['utilisateur']['type']],'dem_titre'=>$_POST['titre'],'dem_message'=>$_POST['message'],'per_id'=>$_SESSION['utilisateur']['per_id']]);
			header('Location: .?route=espace&message=Done!');
		break;
		case 'demandeUpdate' :
			include 'model/model.php';
			$demType=['professeur'=>'travaux','service'=>'commande'];
			$dem=new Demande($_POST['id']);
			$dem->dem_type=$demType[$_SESSION['utilisateur']['type']];
			$dem->dem_titre=$_POST['titre'];
			$dem->dem_message=$_POST['message'];
			$dem->update();
			header('Location: .?route=espace&message=Done!');
		break;
		default: break;
	}}

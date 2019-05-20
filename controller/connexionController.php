<?php
$_SESSION["username"]=$_POST['username'];
$_SESSION["password"]=$_POST['password'];
include 'model.php';
if (isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['username']!="" && $_SESSION['password']!="" && $_POST['form']="connexion")
{
	$sql = "SELECT * FROM tr_personne_per WHERE per_user='".$_SESSION["username"]."' AND per_password='".$_SESSION["password"]."'";
	$result = BDD::query($sql);
	if($_SESSION['username'] == $result[0][1] && $_SESSION['password'] == $result[0][2])
	{
		$type_queries = array("SELECT etu_id FROM tr_etudiant_etu   WHERE per_id='".$result[0][0]."'" ,
							"SELECT pro_id FROM tr_professeur_pro WHERE per_id='".$result[0][0]."'",
							"SELECT ser_id FROM tr_service_ser WHERE per_id='".$result[0][0]."'");
		$i = 1;
		foreach ($type_queries as $query) {
			$res = BDD::query($sql);
			if (sizeof($res,0)!=0)
				break;
			$i++;

		}
		
		$user=[];
		if($i==1)
		{
			$user = array('per_id' => $result[0][0] , 'per_user' =>$result[0][1],'per_password' =>$result[0][2],'per_nom' =>$result[0][3],'per_mail' =>$result[0][4],'etu_id' => $res[0][0], 'type' =>'etudiant');
		}

		if($i==2)
		{
			$user = array('per_id' => $result[0][0] , 'per_user' =>$result[0][1],'per_password' =>$result[0][2],'per_nom' =>$result[0][3],'per_mail' =>$result[0][4],'pro_id' =>$res[0][0], 'type' =>'professeur');
		}

		if($i==3)
		{
			$user = array('per_id' => $result[0][0] , 'per_user' =>$result[0][1],'per_password' =>$result[0][2],'per_nom' =>$result[0][3],'per_mail' =>$result[0][4],'ser_id' =>$res[0][0], 'type' =>'service');
		}

		$_SESSION['utilisateur'] = $user;
		header("Location: .?route=espace&message=Done!");
	}
	else
	{
		echo "incorrect username or password";
	}
}

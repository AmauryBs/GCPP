<?php
$_SESSION["username"]=$_POST['username'];
$_SESSION["password"]=$_POST['password'];
include 'model.php';
echo"ok1";
if (isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['username']!="" && $_SESSION['password']!="" && $_POST['form']="connexion")
{
	echo"ok2";
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
		if($i==1)
			$_SESSION['utilisateur'] = new Etudiant($res[0][0]);
		if($i==1)
			$_SESSION['utilisateur'] = new Professeur($res[0][0]);
		if($i==1)
			$_SESSION['utilisateur'] = new Service($res[0][0]);
		header("Location: .?route=espace");
	}
	else
	{
		echo "incorrect username or password";
	}


}
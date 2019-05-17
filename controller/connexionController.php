<?php
session_start();
include '../bdd.php'
if (isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['username']!="" && $_SESSION['password']!="")
{
	$sql = "SELECT * FROM personne WHERE per_user='".$_SESSION["username"]."' AND per_password='".$_SESSION["password"]."'";
	$result = BDD::query($sql);
	if($_SESSION['username'] == $result[0][1] && $_SESSION['password'] == $result[0][2])
	{
		$_SESSION['utilisateur'] = new Personne($result[0][0]);
		header("Location: .?espace");
	}
	else
	{
		echo "incorrect username or password";
	}


}
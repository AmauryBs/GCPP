<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>GCPP</title>
</head>
<body>
	<img src="img/logo_usmb.png"/> <img id ="polytech" src="img/logo_polytech.png"/>
	<main>
		<header>Gestion des commandes pour projets pédagogiques</header>
		<section>
			<form action=".?route=connexion&form=connexion" method="post">
					<?php
					$username_set = isset($_POST["username"]) && empty($_POST["username"]);
					$password_set = isset($_POST["password"])  && empty($_POST["password"]);
					if ($username_set || $password_set)
					{
						echo "<p>";
						if ($username_set) 
						{
							echo "Merci de rentrer un nom d'utilisateur.";
						}
						if ($username_set && $password_set)
						{
							echo "<br>";
						}
						if ($password_set) 
						{
							echo "Merci de rentrer un mot de passe.";
						}
						echo "</p>";
					}
					?>
				<input type="text" id="username" name="username" placeholder="Utilisateur">
				<input type="password" id="password" name="password" placeholder="Mot de passe">
				<br />
				<button type="submit">Connexion</button>
			</form>
			<a href="https://www.univ-smb.fr/universite/aide/">Besoin d'aide?</a>
		</section>
		<footer>Espace de connexion</footer>
	</main>
</body>
</html>

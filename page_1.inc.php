<form method="post" action="./espace.php?page=1" enctype="multipart/form-data">
	<label>Formulaire d'envoi de demande</label><br />
	<input type="text" id="title" name="title" placeholder="Renseignez le titre de votre demande."><br />
	<textarea id="message" name="message" placeholder="Veuillez rentrer le sujet de votre demande."></textarea><br />
	<input type="file" name="files" multiple><br />
	<button type="submit">Envoyer</button>
</form>
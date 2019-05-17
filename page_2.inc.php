
<ul>
<?php while($row=$dem_pro){
	echo '<li><form method="post" action="./espace.php?page=2" enctype="multipart/form-data">
		<label for="message"> Demande de:'.$dem_pro["per_nom"].'</label><br />
		<input type="text" id="title" name="title">'.$dem_pro["dem_titre"].'<br />
		<textarea id="message" name="message">'.$dem_pro["dem_message"].'</textarea><br />
		<input type="file" name="files" multiple><br />
		<button type="submit">Valider</button>
		</form></li>'
?>
</ul>
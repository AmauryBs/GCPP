
<ul>
<?php while($row=$dem_pro){
	echo '<li><form method="post" action="./espace.php?page=2" enctype="multipart/form-data">
		<input type="hidden" name="id" value="'.$row["dem_id"].'"">
		<label for="message"> Demande de:'.$row["per_nom"].'</label><br />
		<input type="text" id="titre" name="titre" value="'.$row["dem_titre"].'"><br />
		<textarea id="message" name="message">'.$row["dem_message"].'</textarea><br />
		<!--<input type="file" name="files" multiple><br />-->
		<button type="submit">Valider</button>
		</form></li>'
?>
</ul>
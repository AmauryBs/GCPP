
<ul>
<?php while($row=$dem_pro){
	echo '<li><form method="post" action="./espace.php?page=2" enctype="multipart/form-data">
		<label for="dem_message"> Demande de:'.$dem_pro["per_nom"].'</label><br />
		<textarea id="dem_message" name="dem_message">'.$dem_pro["dem_message"].'</textarea><br />
		<input type="file" name="myFile" multiple><br />
		<button type="submit">Valider</button>
		</form></li>'
?>
</ul>
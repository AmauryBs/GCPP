<ul>
<?php
	$type = 'proposition';
	if $user_type=='ser' {
		$type='travaux'
	}
	$dem_query = 'SELECT dem_id, per_nom, dem_titre, dem_message FROM tr_demande_dem as d JOIN tr_personne_per as p ON d.per_id=p.per.id WHERE dem_type="'.$type$.'";';
	$dem_pro = BDD::query($dem_query);
	while($row=$dem_pro){
		echo '<li><form method="post" action=".?route=espace&page=2" enctype="multipart/form-data">
			<input type="hidden" name="id" value="'.$row["dem_id"].'"">
			<label for="message"> Demande de:'.$row["per_nom"].'</label><br />
			<input type="text" id="titre" name="titre" value="'.$row["dem_titre"].'"><br />
			<textarea id="message" name="message">'.$row["dem_message"].'</textarea><br />
			<!--<input type="file" name="files" multiple><br />-->
			<button type="submit">Valider</button>
			</form></li>';
?>
</ul>

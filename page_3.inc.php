<table>
	<tr>
		<th>État</th>
		<th>Initiateur</th>
		<th>Titre</th>
	</tr>
	<?php
	$histo_query = 'SELECT dem_type, per_nom, dem_titre FROM tr_demande_dem as d JOIN tr_personne_per as p ON d.per_id=p.per.id';
	$histo_dem = BDD::query($histo_query);
		while($row=$histo_dem){
			echo'<tr>
					<td>'.$row['dem_type'].'</td>
					<td>'.$row['pers_nom'].'</td>
					<td>'.$row['dem_titre'].'</td>
				</tr>';}
	?>
</table>
<table>
  <tr>
    <th>Initiateur</th>
    <th>Titre</th>
  </tr>
  <?php
	include 'bdd.php';
    foreach(BDD::query('SELECT per_nom, dem_titre FROM tr_demande_dem d JOIN tr_personne_per p ON d.per_id=p.per_id WHERE dem_type=\'commande\'') as $row) {
      echo'<tr>
          <td>'.$row['per_nom'].'</td>
          <td>'.$row['dem_titre'].'</td>
          </tr>';
	}
  ?>
</table>

<table>
  <tr>
    <th>Initiateur</th>
    <th>Titre</th>
  </tr>
  <?php
    $histo_query = 'SELECT per_nom, dem_titre FROM tr_demande_dem as d JOIN tr_personne_per as p ON d.per_id=p.per.id WHERE dem_type="commande";';
    $histo_com = BDD::query($histo_query);
    while($row=$histo_com){
      echo'<tr>
          <td>'.$row['pers_nom'].'</td>
          <td>'.$row['dem_titre'].'</td>
          </tr>';
  ?>
</table>
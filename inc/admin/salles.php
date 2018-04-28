<?php

$req = $bdd->prepare('SELECT * FROM salles ');
$req->execute();
// On récupère le resultat
$result = $req->fetchAll();
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Gestion des salles</h1>
  </div>


  <div class="table-responsive">
    <?php
    if($result) {
        // debut du tableau
        echo '<table class="table table-striped table-sm">';
            echo '<thread>';
            // on affiche les titres
            echo '<tr>';

            echo '<th>ID</th>';

            echo '<th>Libellé de la salle</th>';

            echo '<th>ID machines</th>';


        // lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.

        foreach($result as $row) {

            echo '<tr>';

            echo '<td>'.$row["id_salle"].'</td>';

            echo '<td>'.$row["libelle_salle"].'</td>';

          echo '<td>'.$row["id_machine"].'</td>';

          echo '</tr>';

        }
    echo '</tbody>';
        echo '</table>';
        // fin du tableau.
    }
    else echo 'Pas d\'enregistrements dans cette table...';
    ?>
  </div>
</main>

<?php include('inc/admin/header.php'); ?>

<link href="assets/css/tickets.css" rel="stylesheet">

<?php
//TICKETS EN ATTENTE
$req = $bdd->prepare('SELECT * FROM tickets WHERE statut_ticket = 0');
$req->execute();
// On récupère le resultat
$result_att = $req->fetchAll();

//TICKETS RESOLU
$req = $bdd->prepare('SELECT * FROM tickets WHERE statut_ticket = 1');
$req->execute();
// On récupère le resultat
$result_resolv = $req->fetchAll();
?>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Gestion des tickets</h1>
  </div>



  <div class="card card-nav-tabs">
      <div class="card-header" data-background-color="purple">
          <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                  <span class="nav-tabs-title"></span>
                  <ul class="nav nav-tabs" data-tabs="tabs">
                      <li class="" style="border-right: solid; margin-right: 1em; padding-right: 1em;">
                          <a class="nav-link nav-link-tickets active" href="#attente" data-toggle="tab">
                              <i class="material-icons">hourglass_empty</i> En attente
                              <div class="ripple-container"></div>
                          </a>
                      </li>
                      <li class="">
                          <a class="nav-link nav-link-tickets" href="#resolue" data-toggle="tab">
                              <i class="material-icons">done</i> Résolue
                              <div class="ripple-container"></div>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="card-content">
          <div class="tab-content">

              <div class="tab-pane active" id="attente">
                <div class="table-responsive">
                  <?php
                  if($result_att) {
                      // debut du tableau
                      echo '<table class="table table-striped table-sm">';
                          echo '<thread>';
                          // on affiche les titres
                          echo '<tr>';

                          echo '<th>Titre</th>';

                          echo '<th>Date</th>';

                          echo '<th>Nom de la machine</th>';

                          echo '<th>Urgence</th>';

                          echo '<th>Traitement</th>';


                      // lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.

                      foreach($result_att as $row) {

                          echo '<tr>';

                          echo '<td>'.$row["titre_ticket"].'</td>';

                          echo '<td>'.$row["date_ticket"].'</td>';

                          echo '<td>'.$row["nom_machine"].'</td>';

                          echo '<td>'.$row["urgence_ticket"].'</td>';

                          echo '<td><a href="traitementticket.php?id='.$row["id_ticket"].'"><button type="submit">Le traiter</button></a></td>';

                          echo '</tr>';

                      }
                  echo '</tbody>';
                      echo '</table>';
                      // fin du tableau.
                  }
                  else echo 'Aucun tickets en attente...';
                  ?>
                </div>
            </div>

            <div class="tab-pane" id="resolue">
              <div class="table-responsive">
                <?php
                if($result_resolv) {
                    // debut du tableau
                    echo '<table class="table table-striped table-sm">';
                        echo '<thread>';
                        // on affiche les titres
                        echo '<tr>';

                        echo '<th>Titre</th>';

                        echo '<th>Date</th>';

                        echo '<th>Nom de la machine</th>';

                        echo '<th>Voir récapitulatif</th>';


                    // lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.

                    foreach($result_resolv as $row) {

                        echo '<tr>';

                        echo '<td>'.$row["titre_ticket"].'</td>';

                        echo '<td>'.$row["date_ticket"].'</td>';

                        echo '<td>'.$row["nom_machine"].'</td>';

                        echo '<td><a href="traitementticket.php?id='.$row["id_ticket"].'"><button type="submit">Récapitulatif</button></a></td>';

                        echo '</tr>';

                    }
                echo '</tbody>';
                    echo '</table>';
                    // fin du tableau.
                }
                else echo 'Aucun tickets résolu..';
                ?>
              </div>
            </div>
          </div>
      </div>
  </div>

</main>

<?php include('inc/admin/footer.php'); ?>

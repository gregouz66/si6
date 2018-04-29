<?php include('inc/admin/header.php'); ?>

<?php
if(isset($_GET['type']) AND isset($_GET['num'])){
if(!empty($_GET['type'] AND $_GET['num'])){

$type = $_GET['type'];
$num = $_GET['num'];
$complet_salle = $type.$num;

$req = $bdd->prepare('SELECT * FROM machines WHERE complet_salle = ?');
$req->execute(array($complet_salle));
$ifresult = $req->rowCount();

if($ifresult != 0){
// On récupère le resultat
$result = $req->fetchAll();
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Gestion des machines</h1>
  </div>


  <div class="table-responsive">
    <?php
    if($result) {
        // debut du tableau
        echo '<table class="table table-striped table-sm">';
            echo '<thread>';
            // on affiche les titres
            echo '<tr>';

            echo '<th>IPV4</th>';

            echo '<th>IPV6</th>';

            echo '<th>Adresse MAC</th>';

            echo '<th>Nom de la machine</th>';

            echo '<th>Host name</th>';

            echo '<th>Salle</th>';


        // lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.

        foreach($result as $row) {

            echo '<tr>';

            echo '<td>'.$row["ipv4_machine"].'</td>';

            echo '<td>'.$row["ipv6_machine"].'</td>';

            echo '<td>'.$row["mac_machine"].'</td>';

            echo '<td>'.$row["nom_machine"].'</td>';

            echo '<td>'.$row["host_name_machine"].'</td>';

            echo '<td>'.$row["complet_salle"].'</td>';

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

<?php } else {
  include('pageintrouvable.php');
} } else {
  include('pageintrouvable.php');
} } else {
  include('pageintrouvable.php');
}?>

<?php include('inc/admin/footer.php'); ?>

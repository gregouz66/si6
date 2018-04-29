<?php include('inc/admin/header.php'); ?>

<?php
$id_ticket = htmlentities($_GET['id']);

require ('inc/admin/traitement_ticket.php');

//Lire le ticket
$req = $bdd->prepare('SELECT * FROM tickets WHERE id_ticket = ? LIMIT 1');
$req->execute(array($id_ticket));
// On récupère le resultat
$result = $req->fetch();

//Lire l'utilisateur qui a créer le ticket
$req2 = $bdd->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur = ? LIMIT 1');
$req2->execute(array($result['id_utilisateur']));
// On récupère le resultat
$result_user = $req2->fetch();
$user_ticket = $result_user['prenom_utilisateur'].' '.$result_user['nom_utilisateur'];

//Lire l'utilisateur qui a traité le ticket
if($result['statut_ticket'] == 1){
  $req3 = $bdd->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur = ? LIMIT 1');
  $req3->execute(array($result['id_technicien']));
  // On récupère le resultat
  $result_technicien = $req3->fetch();
  $technicien_ticket = $result_technicien['prenom_utilisateur'].' '.$result_technicien['nom_utilisateur'];
}
?>

<!-- Partie HTML -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

<?php
     if (empty($errors) === false) {
        echo '<ul>';
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger alert-dismissible fade show'> $error
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </div>";
        }
        echo '</ul>';
    }
    if (empty($errors1) === false) {
       echo '<ul>';
       foreach ($errors1 as $error1) {
           echo "<div class='alert alert-success alert-dismissible fade show'> $error1
           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
             <span aria-hidden='true'>&times;</span>
           </div>";
       }
       echo '</ul>';
   }
    ?>

<?php if($result['statut_ticket'] != 1){ ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Traitement d'un ticket</h1>
  </div>
<?php } else { ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Récapitulatif d'un ticket</h1>
  </div>
<?php } ?>

<!-- Ajout d'utilisateur HTML -->
<h4>Ticket numéro <?php echo $result['id_ticket']; ?></h4>

<br>

<div class="row">
  <div class="col-md-6 col-sm-6" style="border-right:solid;">

      <div>
        <label for="user">Créateur du ticket</label>
        <input type="text" name="user" class="form-control" id="user" value="<?php echo $user_ticket ?>" disabled>
      </div>

      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div>
            <label for="machine">Machine concercée</label>
            <input type="text" name="machine" class="form-control" id="machine" value="<?php echo $result['nom_machine'] ?>" disabled>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div>
            <label for="date">Date</label>
            <input type="text" name="date" class="form-control" id="date" value="<?php echo $result['date_ticket'] ?>" disabled>
          </div>
        </div>
      </div>

      <div>
        <label for="titre">Titre</label>
        <input type="text" name="titre" class="form-control" id="titre" value="<?php echo $result['titre_ticket'] ?>" disabled>
      </div>

      <div>
        <label for="description">Description</label>
        <textarea type="text" name="description" class="form-control" id="description" disabled><?php echo $result['description_ticket'] ?></textarea>
      </div>

  </div>
  <div class="col-md-6 col-sm-6">
    <?php if($result['statut_ticket'] != 1){ ?>
      <form method="post" action="#">
        <div>
          <label for="traitement">Traitement apporté par le technicien</label>
          <textarea type="text" name="traitement" class="form-control" id="traitement"></textarea>
        </div>
        <br>
        <button type="submit" name="close" class="tn btn-lg btn-success buttonlogin">Fermer le ticket</button>
      </form>
    <?php } else { ?>
      <div>
        <label for="titre">Responsable du traitement du ticket</label>
        <input type="text" class="form-control" value="<?php echo $technicien_ticket ?>" disabled>
      </div>
      <div>
        <label for="traitement">Traitement apporté</label>
        <textarea type="text" class="form-control" disabled><?php echo $result['traitement_ticket']?></textarea>
      </div>
    <?php } ?>

  </div>
</div>

</main>

<?php include('inc/admin/footer.php'); ?>

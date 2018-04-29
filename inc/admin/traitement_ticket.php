<?php
if(isset($_POST['close'])) {
  $id_technicien = $_SESSION['id_utilisateur'];
  $traitement = htmlspecialchars($_POST['traitement']);

  if (!empty($traitement)){
    $req = $bdd->prepare('UPDATE tickets SET statut_ticket = 1, id_technicien = ?, traitement_ticket = ? WHERE id_ticket = ? LIMIT 1');
    $req->execute(array($id_technicien,$traitement,$id_ticket));
    $resultreq = $req->rowcount();
    if($resultreq!=0){
      $errors1[] = 'Le ticket a été fermer avec succès !';
    } else {
      $errors[] = 'Problème lors du traitement !';
    }
  } else {
    $errors[] = 'Remplissez le traitement par le technicien avant de fermer le ticket';
  }
}
?>

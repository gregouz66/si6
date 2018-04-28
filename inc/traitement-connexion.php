	<?php
if(isset($_POST['connexion'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mdp = sha1($_POST['mdp']);
   if(!empty($pseudo) AND !empty($mdp)) {
      $req = $bdd->prepare("SELECT * FROM utilisateurs WHERE adresse_email = ? AND mot_de_passe = ?");
      $req->execute(array($pseudo, $mdp));
      $userexiste = $req->rowCount();
      if($userexiste == 1) {
         $userinfo = $req->fetch();
         $_SESSION['id_utilisateur'] = $userinfo['id_utilisateur'];
         header('Location: admin.php');
      } else {
         $erreur2 = "Mauvais pseudo ou mot de passe !";
      }
   } else {
      $erreur2 = "Tous les champs doivent être complétés !";
   }
}
?>



<?php
		// Affiche l'erreur s'il y en a une
        if(isset($erreur2)){
			echo '<div class="alert alert-danger">';
			echo $erreur2;
			echo '</div>';
		}else{
		}
		?>

    <!-- if isset $_SESSION alors qqun connect-->

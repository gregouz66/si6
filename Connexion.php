<?php require ('inc/bdd.php'); ?>

<?php
$suppbot = $bdd->prepare("SELECT * FROM utilisateurs WHERE id_utilisateur = 29");
$suppbot->execute();
$result = $suppbot->fetch();
echo $result['adresse_email'];
?>

<?php require ('inc/bdd.php'); ?>

<?php
// Traitement du formulaire s'il a bien été envoyé
if(isset($_POST['ajout_machines'])) {

  $nombre_amont = 20; //Nbre de machines que le programme créera
  $i = 1; //Variable pour compter le nombre de boucle

  while($i < $nombre_amont){

    // Déclaration des variables sécurisées
    $salle = htmlentities(trim($_POST['salle']));

    if(!empty($_POST['salle'])) {

      //Création IPV4 aléatoire
      $ipv4 = '192.168.';
      $hasard1 = rand(0, 99);
      $hasard2 = rand(0, 253);
      $ipv4 .= $hasard1.'.'.$hasard2;

      //Création IPV6 aléatoire
      $ipv6 = '2a';
      $hasard3 = rand(100, 999);
      $hasard4 = rand(100, 999);
      $hasard5 = rand(10, 99);
      $hasard6 = rand(10, 99);
      $hasard7 = rand(10, 99);
      $hasard8 = rand(0, 9);
      $hasard9 = rand(0, 9);
      $hasard10 = rand(100, 999);
      $ipv6 .= $hasard5.':e'.$hasard6.':eo'.$hasard8.'e:7d'.$hasard7.':'.$hasard4.'c:'.$hasard3.':e'.$hasard9.'bb:'.$hasard10.'c';

      //Création MAC aléatoire
      $mac = '';
      $hasard11 = rand(10, 99);
      $hasard12 = rand(10, 99);
      $hasard13 = rand(10, 99);
      $hasard14 = rand(10, 99);
      $hasard15 = rand(0, 9);//
      $hasard16 = rand(0, 9);
      $mac = $hasard15.'C-F'.$hasard16.'-'.$hasard11.'-'.$hasard12.'-'.$hasard13.'-'.$hasard14;

      $hasard17 = rand(1, 999);
      $name = 'PC-'.$hasard17;

      // Création du produit SANS CODE PRODUIT dans la bdd
      $creationmachine = $bdd->prepare("INSERT INTO machines(ipv4_machine, ipv6_machine, mac_machine, nom_machine, host_name_machine, complet_salle) VALUES(?, ?, ?, ?, ?, ?)");
      $creationmachine->execute(array($ipv4,$ipv6,$mac,$name,$name,$salle));
      $resultmachine = $creationmachine->rowCount();

      if($resultmachine == 1){
        $errors = "Création terminée avec succès !";
      } else {
        $errors = "Erreur lors de la création du produit !";
        var_dump($creationproduit->errorInfo());
      }
    } else {
      $errors = "Tous les champs doivent être complétés !";
    }
    $i++;
  }
}
?>

<html>
  <body>
    <?php if(isset($errors)){echo $errors;} ?>
    <form method="post" action="#">
      <input type="text" name="salle">
      <button type="submit" name="ajout_machines">Ajout(20)</button>
    </form>
  </body>
</html>

<?php
         if(isset($_SESSION['id_client']) AND $userinfo['id_client'] == $_SESSION['id_client']) {
		 }else{
			 echo "<script type='text/javascript'>document.location.replace('inscription.php');</script>";
		 }
         
         if($userinfo['administrateur'] == '0'){
             echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
             
         }else{
   
         }
         ?>
         
         <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Administration</a>
        </div>
    <ul class="nav navbar-nav">
      <?php if($titre == 'Administration'){ echo'<li class="active"><a href="#">Accueil</a></li>'; }else{echo '<li><a href="admin.php">Accueil</a></li>';} ?>
      <?php if($titre == 'Liste des produits' or $titre == 'Ajouter/Supprimer un produit'){ echo'<li class="dropdown active">'; }else{echo '<li class="dropdown">';} ?>
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produits <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="liste_produits.php">Liste des produits</a></li>
            <li><a href="produits.php">Ajouter/Supprimer un produit</a></li>
          </ul>
        </li>
      <?php if($titre == 'Clients'){ echo'<li class="active"><a href="#">Clients</a></li>'; }else{echo '<li><a href="clients.php">Clients</a></li>';} ?>
      <?php if($titre == 'Avis'){ echo'<li class="active"><a href="#">Avis</a></li>'; }else{echo '<li><a href="avis.php">Avis</a></li>';} ?>
    </ul>
  </div>
</nav>
<?php
         if(isset($_SESSION['id_client']) AND $userinfo['id_client'] == $_SESSION['id_client']) {
		 }else{
			 echo "<script type='text/javascript'>document.location.replace('inscription.php');</script>";
		 }
         
  
         ?>
         
         <div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
             <?php if($titre == 'Espace membre'){ echo'<li class="active"><a href="#">Accueil</a></li>'; }else{echo '<li><a href="membre.php">Accueil</a></li>';} ?>
             <?php if($titre == 'Mes informations'){ echo'<li class="active"><a href="#">Mes informations</a></li>'; }else{echo '<li><a href="informations.php">Mes informations</a></li>';} ?>
             <?php if($titre == 'Mot de passe'){ echo'<li class="active"><a href="#">Mot de passe</a></li>'; }else{echo '<li><a href="mot-de-passe.php">Mot de passe</a></li>';} ?>
             <?php if($titre == 'Rédiger un avis'){ echo'<li class="active"><a href="#">Rédiger un avis</a></li>'; }else{echo '<li><a href="rediger-avis.php">Rédiger un avis</a></li>';} ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
</div>
<?php include ('inc/mailconfig.php'); ?>
<?php require ('inc/bdd.php'); ?>

<?php
  if(isset($_SESSION['id_utilisateur'])) {
    header('Location: admin.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/glpi.ico">

    <title>GLPI - Mirror</title>

    <!-- Bootstrap core CSS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="bootstrap/docs/examples/narrow-jumbotron.css" rel="stylesheet">
    <link href="assets/css/indexcss.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">

        <div class="contrainer">
          <div class="row">
            <div class="col-sm-8">


        <!--config email-->
        <?php
        if (isset($_GET['sent']) === true) {
          header('Location: contactfin.php');
          exit();
        } else {

            if (empty($errors) === false) {
                echo '<ul>';
                foreach ($errors as $error) {
                    echo '<li>', $error, '</li>';
                }
                echo '</ul>';
            }
            ?>

            </div>
            <div class="col-sm-4">

        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">



<!-- Button trigger modal -->
  <a class="nav-link" data-toggle="modal" data-target="#myModal" href="#">Contact</a>

            </div>
          </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form  method="post" action="#">

          <div class="form-group">
            <label for="name">Prénom</label>
            <input type="text" name="name" class="form-control" id="name" <?php if (isset($_POST['name']) === true) {
         echo 'value="', strip_tags($_POST['name']), '"';
     } ?>>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" <?php if (isset($_POST['email']) === true) {
         echo 'value="', strip_tags($_POST['email']), '"';
     } ?>>
          </div>

          <div class="form-group">
              <label for="message">Message</label>
              <textarea type="text" name="message" class="form-control" id="message" <?php if (isset($_POST['message']) === true) {
            echo strip_tags($_POST['message']);
        } ?>></textarea>
          </div>



      </div>
      <div class="modal-footer">
        <button type="submit" value="Send" class="btn btn-primary" name="contact">Envoyer</button>
      </div>
    </form>
    </div>
  </div>
</div>

            </li>
          </ul>
        </nav>
      </div>


      <div class="jumbotron mainlogin">
        <h1 class="display-3">Connexion</h1>
        <p class="lead">Connectez-vous &agrave; l'aide de votre identifiant et votre mot de passe.</p>


        <form method="post" action="#">
          <?php include('inc/traitement-connexion.php'); ?>
          <div class="form-group">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0 formlogin2">
                  <div class="input-group-addon">@</div>
                  <input type="text" class="form-control formlogin" id="exampleInputPassword1" name="pseudo" placeholder="Pseudo">
              </div>
          </div>

          <div class="form-group">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0 formlogin2">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" class="form-control formlogin" id="exampleInputPassword1" name="mdp" placeholder="Password">
              </div>
          </div>


              <button type="submit" name="connexion" class="tn btn-lg btn-success buttonlogin">Go</button>

        </form>


      <footer class="footer">
        <p>&copy; GLPI Mirror 2018</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script language="JavaScript" type="text/javascript" src="assets/js/indexjs.js"></script>
    <script language="JavaScript" type="text/javascript" src="./bootstrap/js4/bootstrap.min.js"></script>

    <?php
}
?>

  </body>
</html>

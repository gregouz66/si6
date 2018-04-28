<?php require ('inc/bdd.php'); ?>
<?php require ('inc/admin/incadmin.php'); ?>

<?php
  if(!isset($_SESSION['id_utilisateur'])) {
    header('Location: index.php');
    exit;
  }
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Administration - GLPI M2018</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="admin.php">ADMINISTRATION</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">

              <?php
                    switch ($selector) {
                      case '1':
                      include ('inc/admin/activenav/active1.php');
                      break;

                      case '2':
                      include ('inc/admin/activenav/active2.php');
                      break;

                      case '3':
                      include ('inc/admin/activenav/active3.php');
                      break;

                      case '4':
                      include ('inc/admin/activenav/active4.php');
                      break;

                      default:
                      include ('inc/admin/activenav/active1.php');
                      break;
                    }
                  ?>


            </ul>

          </div>
        </nav>

        <?php
              switch ($selector) {
                case '1':
                include ('inc/admin/dashboard.php');
                break;

                case '2':
                include ('inc/admin/utilisateurs.php');
                break;

                case '3':
                include ('inc/admin/machines.php');
                break;

                case '4':
                include ('inc/admin/tickets.php');
                break;

                default:
                include ('inc/admin/dashboard.php');
                break;
              }
            ?>


      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>


  </body>
</html>

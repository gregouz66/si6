<?php require ('inc/bdd.php'); ?>
<?php require ('inc/admin/incadmin.php'); ?>

<?php
  if(!isset($_SESSION['id_utilisateur'])) {
    header('Location: index.php');
    exit;
  }
?>

<?php $url = $_SERVER['PHP_SELF']; ?>

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


              <li class="nav-item">
                <a class="nav-link <?php if($url == '/si6_git/admin.php'){echo 'active';}  ?>" href="admin.php">
                  <span data-feather="home"></span>
                  Tableau de bord <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($url == '/si6_git/utilisateurs.php'){echo 'active';}  ?>" href="utilisateurs.php">
                  <span data-feather="users"></span>
                  Utilisateurs
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link collapsed <?php if($url == '/si6_git/machines.php'){echo 'active';}  ?>" href="#submenu1" data-toggle="collapse" data-target="#submenu1"> <span data-feather="layers"></span> Salles / Machines</a>
                <div class="collapse" id="submenu1" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">

                        <li class="nav-item">
                            <a class="nav-link collapsed py-1" href="#sallei" data-toggle="collapse" data-target="#sallei">Salle (i)</a>
                            <div class="collapse" id="sallei" aria-expanded="false">
                                <ul class="flex-column nav pl-4">
                                    <li class="nav-item">
                                        <a class="nav-link p-1" href="machines.php?type=i&num=110">
                                            <i class="fa fa-fw fa-clock-o"></i> 110
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-1" href="machines.php?type=i&num=111">
                                            <i class="fa fa-fw fa-dashboard"></i> 111
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-1" href="machines.php?type=i&num=112">
                                            <i class="fa fa-fw fa-bar-chart"></i> 112
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-1" href="machines.php?type=i&num=113">
                                            <i class="fa fa-fw fa-compass"></i> 113
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link collapsed py-1" href="#sallee" data-toggle="collapse" data-target="#sallee">Salle (e)</a>
                            <div class="collapse" id="sallee" aria-expanded="false">
                                <ul class="flex-column nav pl-4">

                                    <li class="nav-item">
                                        <a class="nav-link p-1" href="#e-etage1" data-toggle="collapse" data-target="#e-etage1">Premier étage</a>
                                        <div class="collapse" id="e-etage1" aria-expanded="false">
                                            <ul class="flex-column nav pl-4">
                                                <li class="nav-item">
                                                  <a class="nav-link p-1" href="machines.php?type=e&num=110">
                                                      <i class=""></i> 110
                                                  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="machines.php?type=e&num=111">
                                                        <i class=""></i> 111
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="machines.php?type=e&num=112">
                                                        <i class=""></i> 112
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="machines.php?type=e&num=113">
                                                        <i class=""></i> 113
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link p-1" href="#e-etage2" data-toggle="collapse" data-target="#e-etage2">Deuxième étage</a>
                                        <div class="collapse" id="e-etage2" aria-expanded="false">
                                            <ul class="flex-column nav pl-4">
                                                <li class="nav-item">
                                                  <a class="nav-link p-1" href="machines.php?type=e&num=210">
                                                      <i class=""></i> 210
                                                  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="machines.php?type=e&num=211">
                                                        <i class=""></i> 211
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="machines.php?type=e&num=212">
                                                        <i class=""></i> 212
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="machines.php?type=e&num=213">
                                                        <i class=""></i> 213
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link p-1" href="#e-etage3" data-toggle="collapse" data-target="#e-etage3">Troisième étage</a>
                                        <div class="collapse" id="e-etage3" aria-expanded="false">
                                            <ul class="flex-column nav pl-4">
                                                <li class="nav-item">
                                                  <a class="nav-link p-1" href="machines.php?type=e&num=310">
                                                      <i class=""></i> 310
                                                  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="machines.php?type=e&num=311">
                                                        <i class=""></i> 311
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="machines.php?type=e&num=312">
                                                        <i class=""></i> 312
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="machines.php?type=e&num=313">
                                                        <i class=""></i> 313
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link <?php if($url == '/si6_git/tickets.php'){echo 'active';}  ?>" href="tickets.php">
                  <span data-feather="users"></span>
                  Tickets
                </a>
              </li>

              <br>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="home"></span>
                  Retour
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <span data-feather="log-out"></span>
                  Déconnexion
                </a>
              </li>

            </ul>

          </div>
        </nav>

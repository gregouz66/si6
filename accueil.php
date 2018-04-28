<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>GLPI - Interface Standard</title>
      <link rel='shortcut icon' type='image/x-icon' href="images/icon/logo-glpi-2.jpg">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/accueil_style.css" >

  </head>
  <body>
    <header>
      <div id="" style="width: 100%; margin: 0px; height: auto;">
          <div style="display: flex;">
            <div class="header_1" style="flex: 1;">
                <div>
                    <img src="images/logo-glpi-500-blue.png" class="logo" style="position: absolute; left: 20px; top: 10px;">
                </div>

                <input type="search" placeholder="recherche" name="recherche" class="recherche" />
                <div id="language" style="margin: 10px;">
                    Français
                </div>
                <div class="">
                    <button type="button" class="btn btn-default">
                      <img src="images/icon/question.svg">
                    </button>
                    <button type="button" class="btn btn-default">
                        <img src="images/icon/star.svg">
                    </button>
                    <button type="button" class="btn btn-default">
                        <img src="images/icon/bug.svg">
                    </button>
                    <button type="button" class="btn btn-default">
                        <img src="images/icon/settings.svg"> <span> glpi</span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <img src="images/icon/sign-out.svg">
                    </button>
                </div>
            </div>
              <div class="espace_profile" >
                  <div><img src="https://robohash.org/63.143.42.243.png" width="44px" height="44px" style="border-radius: 50%; background-color: #c4c4c4;"></div>
                  <div>Administrateur</div>
              </div>
        </div>

        <div class="nav_principal" style="display: flex; justify-content: center; align-items: center;" >
            <ul style="list-style-type: none; display: flex; justify-content: center; align-items: center;">
                <a href="#"><li>Parc</li></a>
                <a href="#"><li>Assistance</li></a>
                <a href="#"><li>Gestion</li></a>
                <a href="#"><li>Outils</li></a>
                <a href="admin.php"><li>Administration</li></a>
                <a href="#"><li>Configuration</li></a>
            </ul>
            <div class="menu_1"><img src="images/icon/three-bars.svg" alt="menu"></div>
        </div>

      </div>
    </header>

    <div>
      <div>
          <button type="button" class="btn btn-primary" style=" margin-left: 20px;">Accueil</button>
      </div>
      <div id="block_page">
          <div class="block_article">
              <div id="nav_2">
                  <button type="button" class="btn btn-primary" >Vue Personnelle</button>
                  <button type="button" class="btn btn-primary" >Vue Groupe</button>
                  <button type="button" class="btn btn-primary" >Vue Global</button>
                  <button type="button" class="btn btn-primary" >Flux RSS</button>
                  <button type="button" class="btn btn-primary" >Tous</button>
              </div>

              <div class="block_information">
                  <div class="icon_attention">
                      <img src="images/icon/caution.svg" height="72" width="72">
                  </div>
                  <div class="text_error">
                      <p>
                          Non ergo erunt homines deliciis diffluentes audiendi, si quando de amicitia, quam nec usu nec ratione habent cognitam,
                          disputabunt. Nam quis est, pro deorum fidem atque hominum! qui velit, ut neque diligat quemquam nec ipse ab ullo dili
                          gatur, circumfluere omnibus copiis atque in omnium rerum abundantia vivere?
                      </p>
                  </div>

              </div>
              <div style="display: flex; justify-content: space-around;">
                  <div>

                  </div>
                  <div>
                      <div>
                          <h2>Votre Planning</h2>
                          <div><p>Aucun n'événement à afficher</p></div>
                      </div>
                      <div>
                          <h2>Notes Personnelles</h2>
                          <div class="content_note"><p>quelque chose !!!</p>
                            <img src="images/icon/add-circular-button.svg" style="width: 25px; height: 25px; position: absolute; right: 5px; bottom: 0px;">
                          </div>
                      </div>
                      <div>
                          <h2>Notes Publique</h2>
                          <div class="content_note"><p>quelque chose !!!</p>
                              <img src="images/icon/add-circular-button.svg" style="width: 25px; height: 25px; position: absolute; right: 5px; bottom: 0px;">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <footer>
        <div class="copyright">
            <div>donnée page !!!</div>
            <div>
                GLPI Mirror 10.0.0 Copyright © 2017-2018 greg and collaborators - Copyright ©2015-2017 Teclib' and
                contributors - Copyright © 2003-2015 Development Team
            </div>
        </div>
    </footer>
  </body>
</html>

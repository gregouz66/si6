<?php include('inc/header.php') ?>

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

<?php include('inc/footer.php') ?>

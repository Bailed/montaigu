@extends('layouts.app')
@section('content')
<style media="screen">

#demo {
    position:relative;width:200px;height:40px;text-align:center;margin-top:-12em;right:20%;float:right;background: url('img/date.svg') no-repeat;font-weight:bold;
}
#demo2,#demo2-container {display:none;}
.arrow_header {margin-top:-6em;}
.showcase-text-special {background: url('img/fond-decor.svg') no-repeat no-repeat;background-size:full;background-position: right bottom;}
.new_place {width:80%;margin-left:80px}
@media (max-width: 767px) {
    #demo {
        display:none;
    }

    #demo2 {
        display:block;
        position:absolute;
        width:100%;
        height:40px;
        text-align:center;
        background: #E5007D;
        color: white;
        font-weight:bold;
    }
    .arrow_header {margin-top:0em;padding-bottom:1em;}
    .showcase-text-special {background: url('img/fond-decor.svg') no-repeat no-repeat;background-size:cover;background-position: top right;}
    section.showcase {margin-left:0px !important;}
    .new_place {width:100%;margin-left:0px}
    .img-special {display: none !important;}
    .slick-dots {display: none !important;}
}
</style>
        <!-- Masthead -->
        <header class="masthead text-white">
        <div id="demo" style=""></div>
         <div class="overlay" style="margin-top:4.5em;"></div>
          <div class="container">
            <div class="row">
              <div class="col-xl-12 mx-auto text-right" style="margin-right:10%;margin-top:-100px;">
                <p style="font-size:1.5em;"><b>Théâtre de Thalie 9h-19h<br>Montaigu-Vendée<br></b></p>
                <img src="img/destination-emploi.svg" alt="" style="width:50%;">
                <p style="font-size:2.3em;text-shadow: 1px 1px 2px #E5007D;margin-top:1em;">Vendredi 29 mars,<br> prenez la bonne <br> direction pour <br> votre emploi.</p>
                <a href="#features-icons">
                <div style="width:50px;margin-left:auto;margin-right:auto;z-index:1000">
                    <img class="arrow_header" src="img/fleche.svg" alt="" style="">
                </div>
                </a>
              </div>
            </div>
          </div>
        </header>
        <div id="demo2-container" class="container" style="padding-top:1em;background-color:#E5007D;width: 100%;padding-right: 0px;padding-left: 0px;margin-right:0px;margin-left:0px;">
            <div id="demo2"></div>
        </div>
        <!-- Icons Grid -->
        <section id="features-icons" class="features-icons" style="background-color:white;margin-top:-2em;background: url('../img/demi-cercle1.svg') no-repeat;background-position: 25% bottom;background-size:150px;">
          <div class="container">
              <div class="row">
                  <div class="col-lg-1">

                  </div>
                  <div class="col-lg-10">
                      <h3 class="first_letter" style="color:#31328A;margin-left: 12%;">Vous êtes demandeur d’emploi, étudiant,
                          en reconversion ou à la recherche
                          de nouvelles opportunités professionnelles ?
                          <br>
                         <span style="text-shadow: 1px 1px 2px #12B7C0;"><span style="font-weight:300">Ici, les entreprises</span> n’attendent que vous.</span></h3>
                  </div>
              </div>
            <div class="row text-center" style="margin-top:3em;color:#E5007D">
              <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                    <img src="img/350offres.svg" alt="" style="width:4em;margin-left:auto;margin-right:auto;">
                  </div>
                  <p class="lead mb-0"><b style="font-size:1em;font-weight:bold;">500 offres</b> prêtes à l'emploi</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                    <img src="img/50entreprises.svg" alt="" style="width:4em;margin-left:auto;margin-right:auto;">
                  </div>
                   <p class="lead mb-0"><b style="font-size:1em;font-weight:bold;">50 entreprises</b> tous secteurs d'activité</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                    <img src="img/rencontres.svg" alt="" style="width:4em;margin-left:auto;margin-right:auto;">
                  </div>
                  <p class="lead mb-0">Des <b style="font-size:1em;font-weight:bold;">rencontres</b>, des ateliers et conférences</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                    <img src="img/formation.svg" alt="" style="width:4em;margin-left:auto;margin-right:auto;">
                  </div>
                  <p class="lead mb-0">Toutes les informations pour se <b style="font-size:1em;font-weight:bold;">former</b> et se <b style="font-size:1em;font-weight:bold;">reconvertir</b></p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="testimonials text-center" style="background-color:#31328A;color:white;">
          <div class="container">
              <div class="row">
                  <h2 class="mb-5 first_letter" style="margin-left:auto;margin-right:auto;">Votre futur emploi se trouve ici.</h2>
              </div>
            <div class="row">
                <section class="center slider">
                  <div style="text-align:center;display:table-cell;vertical-align: middle;">
                    <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Agroalimentaire</p>
                    <img style="margin-top:-1em;" src="img/logos/Logo_Sodebo_300X300_Terres-de-Montaigu.jpg">
                  </div>
                  <div style="text-align:center;display:table-cell;vertical-align: middle;">
                      <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Logistique</p>
                    <img style="margin-top:-1em;" src="img/logos/Logo_FM_300X300_Terres-de-Montaigu.jpg">
                  </div>
                  <div style="text-align:center;display:table-cell;vertical-align: middle;">
                      <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Industrie</p>
                    <img style="margin-top:-1em;" src="img/logos/Logo_Defontaine_300X300_Terres-de-Montaigu.jpg">
                  </div>
                  <div style="text-align:center;display:table-cell;vertical-align: middle;">
                      <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Agroalimentaire</p>
                    <img style="margin-top:-1em;" src="img/logos/Logo_Ponroy_300X300_Terres-de-Montaigu.jpg">
                  </div>
                  <div style="text-align:center;display:table-cell;vertical-align: middle;">
                      <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Hôtellerie</p>
                    <img style="margin-top:-1em;" src="img/logos/Logo_Hotel-Saint-James-Terres-de-Montaigu.jpg">
                  </div>
                  <div style="text-align:center;display:table-cell;vertical-align: middle;">
                      <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Agroalimentaire</p>
                    <img style="margin-top:-1em;" src="img/logos/Logo_Laiterie-de-Montaigu-Terres-de-Montaigu.jpg">
                  </div>
                  <div style="text-align:center;display:table-cell;vertical-align: middle;">
                      <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;">Service à la personne</p>
                    <img style="margin-top:-1em;" src="img/logos/Logo_CHD-Terres-de-Montaigu.jpg">
                  </div>
                  <div style="text-align:center;display:table-cell;vertical-align: middle;">
                      <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Industrie</p>
                    <img style="margin-top:-1em;" src="img/logos/Logo_Gebe-Terres-de-Montaigu.jpg">
                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Agroalimentaire</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_Fonteneau-Terres-de-Montaigu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;">Service à la personne</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_Reel-Terres-de-Montaigu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Immobilier</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_Duret-Terres-de-Montaigu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Restauration</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_Mac_Donald-Terres-de-Montaigu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Agroalimentaire</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_Briogel-Terres-de-Montaigu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Transport</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_Hervouet-Terres-de-Montaigu.jpg">

                  </div>

                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Construction</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_Vinci_Terres-de-Montaigu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Industrie</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_Tronico-Terres-de-Montaigu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Construction</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_Moinard-Terres-de-Montaigu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Construction</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_LCA-Terres-de-Montaigu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Agroalimentaire</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_Difagri-Terres-de-Montaigu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Banque</p>
                       <img style="margin-top:-1em;" src="img/logos/Logo_CA-Terres-de-Montaigu.jpg">

                  </div>


                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Service</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-conseil-securite-formation.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Logistique</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-coveto.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Transport</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-db-schenker.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Bâtiment</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-Edycem.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Service</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-flexance.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Industrie</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-haworth.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Industrie</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-heraud.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Service</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-jussieu.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Logistique</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-sofinther.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Industrice</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-sermiexia.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Agricole</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-orvia.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Logistique</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-orcab.jpg">

                  </div>
                  <div>
                       <p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;">Industrie</p>
                       <img style="margin-top:-1em;" src="img/logos/destination-emploi-montaigu-mc-france.jpg">

                  </div>
                </section>
            <!--
            <div class="row" style="margin-top:5em;color:#E5007D">
                <div class="col-md-12 text-center">
                    <h5 style="font-weight:400;">JE DÉCOUVRE<br> TOUTES LES OFFRES <img src="img/fleche-droite.svg" alt="" style="width:50px;margin-top:-30px;margin-left:10px;"></h5>
                </div>
            </div>
        -->
          </div>
        </section>

        <!-- Image Showcases -->
        <section class="showcase">
          <div class="container-fluid p-0">
            <div class="row no-gutters">
              <div class="col-lg-6 text-white showcase-img" style="background: url('img/stock_thumb_destination.jpeg') no-repeat;background-size:cover;"></div>
              <div class="col-lg-6 showcase-text showcase-text-special">
                <h2 class="first_letter" style="color:#2C2D78"> Destination Emploi : une journée pour trouver un emploi et bien plus encore.</h2>
                <p class="lead mb-0" style="padding-left:1.5em;color:#2C2D78">Destination Emploi, c’est la journée incontournable de l’emploi en Terres de Montaigu. Que vous soyez à la recherche d’un emploi, étudiant, en reconversion ou simplement à l’écoute de nouvelles opportunités, vous y trouverez de nombreuses offres d’emploi disponibles immédiatement ainsi que toutes les informations sur la formation professionnelle et la reconversion.</h2>
            </div>
          </div>
        </section>

        <section class="testimonials text-center" style="background-color:#F6F6F6;">
          <div class="container">
              <div class="row">
                  <h2 class="first_letter" style="margin-left:auto;margin-right:auto;color:#2C2D78"><span style="text-shadow: 1px 1px 2px #12B7C0;"><span style="font-weight:300">Ici, (re)découvrez des </span>secteurs dynamiques qui recrutent.</span></h2>
              </div>
              <div class="row text-center">
                  <div class="col">
                      <p class="mb-5" style="color:#2C2D78;font-size:1.3em">Échangez avec les corps de métiers qui recrutent,<br> découvrez les atouts de secteurs en pleine croissance <br>et bien plus encore dans les espaces Filières dédiés.</p>
                  </div>
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-metallerie.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                    <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">Métallerie</h6>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-agro.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                    <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">Agroalimentaire</h6>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-btp.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                    <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">BTP</h6>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-service.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                    <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">Service à la personne</h6>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-logistique.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                    <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">Logistique / Transport</h6>
                </div>
                <div class="col-lg-1"></div>
            </div>
          </div>
        </section>
        <section class="showcase" style="width:90%;margin-left:5%;background-color:white;background: url('../img/demi-cercle2.svg') no-repeat;background-position: right top;background-size:150px;">
          <div class="container-fluid p-0">
            <div class="row no-gutters">
              <div class="col-lg-8 showcase-text showcase-text-special">
                <h2 class="first_letter" style="color:#2C2D78"> Votre entreprise recrute et vous n'êtes pas encore inscrits ?<br>
                <br><span style="text-shadow: 1px 1px 2px #12B7C0;"><span style="font-weight:300;">Ici, trouvez vos</span> futurs collaborateurs.</span></h2>
                <p class="lead mb-0" style="color:#2C2D78;padding-left:1.5em;text-align:justify;">Donnez de la visibilité à vos offres d’emploi et venez à la rencontre des candidats du territoire et d’ailleurs. Bénéficiez d’un espace dédié sur le salon et de nos conseils pour faire valoir les atouts de votre entreprise et trouver les candidats les plus motivés et performants. Inscrivez-vous dès maintenant directement en ligne, pour participer à la journée Destination Emploi.</h2>
                    <div class="row" style="margin-top:5em;color:#E5007D">
                        <div class="col-md-12 text-center">
                            <a href="{{route('create_company')}}" style="color:inherit"><h5 style="font-weight:bold;">J'inscris <br>mon entreprise <img src="img/fleche-droite.svg" alt="" style="width:50px;margin-top:-30px;margin-left:10px;"></h5></a>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 showcase-img">
                <div class="testimonial" style="margin-top:20%;width:80%;margin-left:10%;">
                    <img src="img/guillemets.svg" alt="" width="50">
                    <p style="color:#2C2D78;font-weight:bold"><i>Nous avons des difficultés à recruter deux profils en tension (charpentier bois et opérateur commande numérique). Nous participons au salon pour rencontrer des profils sur ces deux emplois mais également faire connaître nos métiers et notre société à travers son environnement, son ambiance et ses locaux par exemple.</i></p>
                    <p style="color:#2C2D78"><i>Karine Bouhier, Les Charpentiers de l’Atlantique</i></p>
                </div>
            </div>
          </div>
        </section>

        <section class="showcase" style="background-color:#FA007E;">
          <div class="container-fluid p-0">
            <div class="row no-gutters">
              <div class="col-lg-8 showcase-text">
                  <div style="" class="new_place">
                      <h2 class="first_letter" style="color:white;">Nouveau lieu, nouveau format, nouvelle destination pour l’emploi</h2>
                      <p class="lead mb-0" style="color:white;padding-left:1.5em;">Chaque année depuis 7 ans, Pôle Emploi organise les rendez-vous de l’emploi afin de répondre au dynamisme croissant des entreprises et à leurs besoins en recrutement.
                          <br><br>
                          Cette année, Terres de Montaigu s’associe à Pôle Emploi pour répondre aux besoins toujours plus importants des entreprises. Les rendez-vous de l'emploi deviennent Destination Emploi, une journée entièrement dédiée à l'emploi sur plus de 1 800 m2.</h2>
                          <br>
                          <br>
                          <h3 style="color:#2C2D78;padding-left:1em;">Rendez-vous le 29 mars 2019 !</h3>
                          <p style="color:white;padding-left:1.7em;">Théâtre de Thalie / Montaigu-Vendée / 9h-19h</p>
                    </div>
            </div>
            <div class="col-lg-4 showcase-img img-special" style="background: url('img/lieu.png') no-repeat;background-size:cover">
            </div>
          </div>
        </section>
        <!--
        <section class="testimonials text-center" style="background: url('img/programme-fond.png')">
          <div class="container">
              <div class="row">
                  <h2 class="first_letter" style="margin-left:auto;margin-right:auto;color:white">Programme et organisation du salon</h2>
              </div>
              <div class="row text-center">
                  <div class="col">
                      <p class="mb-5" style="color:white">Avec Destination Emploi, trouvez les conseils et les informations utiles pour trouver votre nouvel emploi et réussir votre projet professionnel.</p>
                  </div>
            </div>
            <div class="row">
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;">
                        <p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">09:00</p>
                    </div>
                    <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Titre de l’évènement</b>
                        <br>Sous-titre au besoin ici et là</p>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">10:00</p></div>
                    <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Titre de l’évènement</b>
                        <br>Sous-titre au besoin ici et là</p>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">12:00</p></div>
                    <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Titre de l’évènement</b>
                        <br>Sous-titre au besoin ici et là</p>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">14:30</p></div>
                    <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Titre de l’évènement</b>
                        <br>Sous-titre au besoin ici et là</p>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">09:00</p></div>
                    <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Titre de l’évènement</b>
                        <br>Sous-titre au besoin ici et là</p>
                </div>
                <div class="col-lg-2 text-center">
                    <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">09:00</p></div>
                    <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Titre de l’évènement</b>
                        <br>Sous-titre au besoin ici et là</p>
                </div>
            </div>
          </div>
        </section>
    -->
        <section class="testimonials text-center" style="background-color:#F6F6F6;color:#31328A;">
          <div class="container">
              <div class="row">
                  <h2 class="mb-5 first_letter" style="margin-left:auto;margin-right:auto;">Les partenaires du salon</h2>
              </div>
            <div class="row">
                <div class="col-lg-1">

                </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                  <div class="body_offer">
                    <a target="_blank" href="https://www.pole-emploi.fr/annuaire/montaigu-85010"><img src="img/poleemploi.jpg" alt="" style="max-width:100%;max-height:100%;box-shadow:none;"></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">
                        <a target="_blank" href="http://www.capemploi85.com/"><img src="img/capemploi.jpg" alt="" style="max-width:100%;max-height:100%;box-shadow:none;"></a>
                    </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">
                        <a target="_blank" href="http://www.emploi.vendee.fr/"><img src="img/mdede.jpg" alt="" style="max-width:100%;max-height:100%;box-shadow:none;"></a>
                    </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">
                        <a target="_blank" href="http://www.mlhb.fr/"><img src="img/missionlocale.png" alt="" style="max-width:100%;max-height:100%;box-shadow:none;"></a>
                    </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">
                        <a target="_blank" href="http://www.paysdelaloire.fr/"><img src="img/regionpdl.jpg" alt="" style="max-width:100%;max-height:100%;box-shadow:none;"></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>



        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("March 29, 2019 00:00:01").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

              // Get todays date and time
              var now = new Date().getTime();

              // Find the distance between now and the count down date
              var distance = countDownDate - now;

              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);

              // Display the result in the element with id="demo"
              document.getElementById("demo").innerHTML = "J-" + days + " H- " + hours;
               document.getElementById("demo2").innerHTML = "J-" + days + " H- " + hours;

              // If the count down is finished, write some text
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "Aujourd'hui !";
                document.getElementById("demo2").innerHTML = "Aujourd'hui !";
              }
            }, 1000);
            </script>




@endsection

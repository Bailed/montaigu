<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion - Salon de l'emploi - Montaigu</title>

        <!-- Fonts -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="css/landing-page.css" rel="stylesheet">

        <style media="screen">
            .first_letter {
                background: url("../img/rond-titres.png") no-repeat;
                background-position: 0px 0px;
                padding:30px;
                float:left;
            }

            .top_offer {
                width:50%;
                background-color: #01B1BB;
            }

            .body_offer {
                width:100%;
                height:150px;
                background-color: #FFFFFF;
            }

            .work_thumb:hover {
                background: url('img/icon-survol1.svg') no-repeat !important;
                background-size:full !important;
                background-position:left center;
                width:120px !important;
                height:120px !important;
                margin-left:auto !important;
                margin-right:auto !important;

            }
        </style>

      </head>

      <body>

        <!-- Navigation -->
        <nav class="navbar navbar-light bg-light static-top text-center">
          <div class="container text-center">
            <a class="navbar-brand" href="/" style="margin-left:auto;margin-right:auto;">
                <img src="img/logo.png" alt="" style="width:150px;">
            </a>
            <ul class="nav nav-pills">
              <li role="presentation" >
                  <a href="#"><img src="img/icon-f.svg" alt="" style="width:25px;margin-left:0.2em;margin-right:0.2em;"></a>
              </li>
              <li role="presentation" >
                  <a href="#"><img src="img/icon-in.svg" alt="" style="width:25px;margin-left:0.2em;margin-right:0.2em;"></a>
              </li>
              <li role="presentation" >
                  <a href="#"><img src="img/icon-t.svg" alt="" style="width:25px;margin-left:0.2em;margin-right:0.2em;"></a>
              </li>
            </ul>
          </div>
        </nav>

        <!-- Masthead -->
        <header class="masthead text-white">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-xl-12 mx-auto text-right" style="margin-right:10%;margin-top:-100px;">
                <p><b>Esplanade de Verdun <br>Montaigu-Vendée<br> 9h-19</b></p>
                <img src="img/destination-emploi.svg" alt="" style="width:40%;">
                <p style="font-size:2em;text-shadow: 1px 1px 2px #E5007D;">Vendredi 29 mars,<br> prenez la bonne <br> direction pour <br> votre emploi.</p>
              </div>
            </div>
          </div>
        </header>

        <!-- Icons Grid -->
        <section class="features-icons" style="background-color:white;margin-top:-2em;background: url('../img/demi-cercle1.svg') no-repeat;background-position: 25% bottom;background-size:150px;">
          <div class="container">
              <div class="row">
                  <div class="col-lg-2">

                  </div>
                  <div class="col-lg-8">
                      <h3 class="first_letter" style="color:#31328A;margin-left: 12%;">Vous êtes demandeur d’emploi, étudiant,
                          en reconversion ou à la recherche
                          de nouvelles opportunités professionnelles ?
                          <br>
                         <span style="text-shadow: 1px 1px 2px #12B7C0;">Ici, les entreprises n’attendent que vous.</span></h3>
                  </div>
              </div>
            <div class="row text-center" style="margin-top:3em;color:#E5007D">
              <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                    <img src="img/350offres.svg" alt="" style="width:4em;margin-left:auto;margin-right:auto;">
                  </div>
                  <p class="lead mb-0"><b style="font-size:1em;font-weight:bold;">350 offres</b> prêtes à l'emploi</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                    <img src="img/50entreprises.svg" alt="" style="width:4em;margin-left:auto;margin-right:auto;">
                  </div>
                   <p class="lead mb-0">Des <b style="font-size:1em;font-weight:bold;">rencontres</b>, des ateliers et conférences</p>
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
                  <h2 class="mb-5 first_letter" style="margin-left:auto;margin-right:auto;">Votre futur emploi se trouve ici</h2>
              </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                  <div class="top_offer">
                      Secteur d'activité
                  </div>
                  <div class="body_offer">

                  </div>
                  <h4>
                      Titre du poste
                  </h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="top_offer">
                        Secteur d'activité
                    </div>
                    <div class="body_offer">

                    </div>
                    <h4>
                        Titre du poste
                    </h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="top_offer">
                        Secteur d'activité
                    </div>
                    <div class="body_offer">

                    </div>
                    <h4>
                        Titre du poste
                    </h4>
                </div>
              </div>
            </div>
            <div class="row" style="margin-top:5em;color:#E5007D">
                <div class="col-md-12 text-center">
                    <h5 style="font-weight:400;">JE DÉCOUVRE<br> TOUTES LES OFFRES <img src="img/fleche-droite.svg" alt="" style="width:50px;margin-top:-30px;margin-left:10px;"></h5>
                </div>
            </div>
          </div>
        </section>

        <!-- Image Showcases -->
        <section class="showcase">
          <div class="container-fluid p-0">
            <div class="row no-gutters">
              <div class="col-lg-6 text-white showcase-img" style="background:#F6F6F6;"></div>
              <div class="col-lg-6 showcase-text" style="background: url('img/fond-decor.svg') no-repeat no-repeat;background-size:full;background-position: right bottom;">
                <h2 class="first_letter" style="color:#2C2D78"> Destination Emploi : une journée pour trouver un emploi et bien plus encore</h2>
                <p class="lead mb-0" style="color:#2C2D78">Destination Emploi, c’est la journée incontournable de l’emploi en Terres de Montaigu. Que vous soyez à la recherche d’un emploi, étudiant, en reconversion ou simplement à l’écoute de nouvelles opportunités, vous y trouverez de nombreuses offres d’emploi disponibles immédiatement ainsi que toutes les informations sur la formation professionnelle et la reconversion.</h2>
            </div>
          </div>
        </section>

        <section class="testimonials text-center" style="background-color:#F6F6F6;">
          <div class="container">
              <div class="row">
                  <h2 class="first_letter" style="margin-left:auto;margin-right:auto;color:#2C2D78">Ici, (re)découvrez des <span style="text-shadow: 1px 1px 2px #12B7C0;">secteurs dynamiques qui recrutent.</span></h2>
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
              <div class="col-lg-8 showcase-text">
                <h2 class="first_letter" style="color:#2C2D78"> Votre entreprise recrute et vous n'êtes pas encore inscrits ?<br>
                <br><span style="text-shadow: 1px 1px 2px #12B7C0;"><span style="font-weight:300;">Ici, trouvez vos</span> futurs collaborateurs.</span></h2>
                <p class="lead mb-0" style="color:#2C2D78">Donnez de la visibilité à vos offres d’emploi et venez à la rencontre des candidats du territoire et d’ailleurs. Bénéficiez d’un espace dédié sur le salon et de nos conseils pour faire valoir les atouts de votre entreprise et trouver les candidats les plus motivés et performants. Inscrivez-vous dès maintenant directement en ligne, pour participer à la journée Destination Emploi.</h2>
                    <div class="row" style="margin-top:5em;color:#E5007D">
                        <div class="col-md-12 text-center">
                            <h5 style="font-weight:bold;">J'inscris <br>mon entreprise <img src="img/fleche-droite.svg" alt="" style="width:50px;margin-top:-30px;margin-left:10px;"></h5>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 showcase-img">
                <div class="testimonial" style="margin-top:20%;width:80%;margin-left:10%;">
                    <img src="img/guillemets.svg" alt="" width="50">
                    <p style="color:#2C2D78;font-weight:bold"><i>Lorem ipsum dolor sit amet, consecte- tuer adipiscing elit, sed diam nonum- my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus- cipit lobortis nisl ut ali</i></p>
                    <p style="color:#2C2D78"><i>Entreprise X</i></p>
                </div>
            </div>
          </div>
        </section>

        <section class="showcase" style="background-color:#FA007E;">
          <div class="container-fluid p-0">
            <div class="row no-gutters">
              <div class="col-lg-8 showcase-text">
                  <div style="width:80%;margin-left:80px">
                      <h2 class="first_letter" style="color:white;">Nouveau lieu, nouveau format, nouvelle destination pour l’emploi</h2>
                      <p class="lead mb-0" style="color:white">Chaque année depuis 7 ans, Pôle Emploi organise les rendez-vous de l'emploi .... Cette année, Terres de Montaigu s'associe à Pôle emploi pour répondre aux besoins toujours plus importants des entreprises.
                          Les rendez-vous de l'emploi deviennent destination Emploi, une journée entièrement dédiée à l'emploi sur plus de 1 800 m2.</h2>
                          <br>
                          <br>
                          <h3 style="color:#2C2D78">Rendez-vous le 29 mars 2019 !</h3>
                          <p style="color:white">Esplanade de Verdun / Montaigu-Vendée / 9h-19h</p>
                    </div>
            </div>
            <div class="col-lg-4 showcase-img" style="background: url('img/lieu.png')">
            </div>
          </div>
        </section>

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

        <section class="testimonials text-center" style="background-color:#F6F6F6;color:#31328A;">
          <div class="container">
              <div class="row">
                  <h2 class="mb-5 first_letter" style="margin-left:auto;margin-right:auto;">Les partenaires du salon</h2>
              </div>
            <div class="row">
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                  <div class="body_offer">

                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">

                    </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">

                    </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">

                    </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">

                    </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">

                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Footer -->
        <footer class="footer" style="color:white;background-color:#31328A">
          <div class="container">
            <div class="row" style="padding-bottom:2em;">
                <h4>Comment se rendre à destination emploi ?</h4>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2721.9643023032445!2d-1.3083586843910486!3d46.98203577914819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805d80590ef6d8d%3A0x2a8ca2b86b6617d1!2s19h%2C+9+Espl.+de+Verdun%2C+85600+Montaigu!5e0!3m2!1sfr!2sfr!4v1548932719684"  width="200" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <h5 class="first_letter">Contact</h5>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euis
                            <br>Telephone
                            <br>Email
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <h5 class="first_letter">Accès</h5>
                    </div>
                    <div class="row">
                        <p>A 10 minutes à pieds
de la gare SNCF TER Montaigu-Vendée, accessible depuis Nantes et La Roche-sur-Yon
                        </p>
                    </div>
                </div>
                <div class="col-lg-3" style="background: url('img/m-footer.png') no-repeat;background-size:cover">
                    <div class="row">
                        <h5 class="first_letter">Lien utile</h5>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euis
                        </p>
                    </div>
                </div>

            </div>
          </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      </body>

    </html>

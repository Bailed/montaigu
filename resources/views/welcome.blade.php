@extends('layouts.app')

@section('content')
        <!-- Masthead -->
        <header class="masthead text-white">
        <div id="demo" style="width:200px;height:40px;text-align:center;margin-top:-12em;margin-right:20%;float:right;background: url('img/date.svg') no-repeat;font-weight:bold;"></div>

          <a href="#features-icons"><div class="overlay"></div></a>
          <div class="container">
            <div class="row">
              <div class="col-xl-12 mx-auto text-right" style="margin-right:10%;margin-top:-100px;">
                <p style="font-size:1.5em;"><b>Théatre de Thalie 9h-19<br>Montaigu-Vendée<br></b></p>
                <img src="img/destination-emploi.svg" alt="" style="width:50%;">
                <p style="font-size:2.3em;text-shadow: 1px 1px 2px #E5007D;margin-top:1em;">Vendredi 29 mars,<br> prenez la bonne <br> direction pour <br> votre emploi.</p>
              </div>
            </div>
          </div>
          <div style="width:50px;height:50px;margin-left:auto;margin-right:auto;z-index:1000">
             <img src="img/fleche.svg" alt="">
          </div>
        </header>

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
                  <p class="lead mb-0"><b style="font-size:1em;font-weight:bold;">350 offres</b> prêtes à l'emploi</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div class="features-icons-icon d-flex">
                    <img src="img/50entreprises.svg" alt="" style="width:4em;margin-left:auto;margin-right:auto;">
                  </div>
                   <p class="lead mb-0"><b style="font-size:1em;font-weight:bold;">45 entreprises</b> tous secteurs d'activité</p>
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
                <section class="center slider">
                  <div>
                    <img src="img/logos/sodebo.png">
                    <p>Aggroalimentaire</p>
                  </div>
                  <div>
                    <img src="img/logos/fmlogistic.jpg">
                    <p>Logistique / Transport</p>
                  </div>
                  <div>
                    <img src="img/logos/defontaine.png">
                    <p>Industrie</p>
                  </div>
                  <div>
                    <img src="img/logos/gps.jpeg">
                    <p>Agroalimentaire</p>
                  </div>
                  <div>
                    <img src="img/logos/saintjames.png">
                    <p>Hôtellerie</p>
                  </div>
                  <div>
                    <img src="img/logos/laiterie.jpg">
                    <p>Agroalimentaire</p>
                  </div>
                  <div>
                    <img src="img/logos/chdvendee.png">
                    <p>Service à la personne</p>
                  </div>
                  <div>
                    <img src="img/logos/superu.jpg">
                    <p>Commerce</p>
                  </div>
                  <div>
                    <img src="img/logos/gebe.png">
                    <p>Industrie</p>
                  </div>
                  <div>
                      <img src="img/logos/telechargement.png">
                      <p>Agroalimentaire</p>
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
              <div class="col-lg-6 showcase-text" style="background: url('img/fond-decor.svg') no-repeat no-repeat;background-size:full;background-position: right bottom;">
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
              <div class="col-lg-8 showcase-text">
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
                  <div style="width:80%;margin-left:80px">
                      <h2 class="first_letter" style="color:white;">Nouveau lieu, nouveau format, nouvelle destination pour l’emploi</h2>
                      <p class="lead mb-0" style="color:white;padding-left:1.5em;">Chaque année depuis 7 ans, Pôle Emploi organise les rendez-vous de l’emploi afin de répondre au dynamisme croissant des entreprises et à leurs besoins en recrutement.
                          <br><br>
                          Cette année, Terres de Montaigu s’associe à Pôle Emploi pour répondre aux besoins toujours plus importants des entreprises. Les rendez-vous de l'emploi deviennent destination Emploi, une journée entièrement dédiée à l'emploi sur plus de 1 800 m2.</h2>
                          <br>
                          <br>
                          <h3 style="color:#2C2D78;padding-left:1em;">Rendez-vous le 29 mars 2019 !</h3>
                          <p style="color:white;padding-left:1.7em;">Théâtre de Thalie / Montaigu-Vendée / 9h-19h</p>
                    </div>
            </div>
            <div class="col-lg-4 showcase-img" style="background: url('img/lieu.png') no-repeat;background-size:cover">
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
                      <img src="img/poleemploi.jpg" alt="" style="max-width:100%;max-height:100%;box-shadow:none;">
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">
                        <img src="img/capemploi.jpg" alt="" style="max-width:100%;max-height:100%;box-shadow:none;">
                    </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">
                        <img src="img/mdede.jpg" alt="" style="max-width:100%;max-height:100%;box-shadow:none;">
                    </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">
                        <img src="img/missionlocale.png" alt="" style="max-width:100%;max-height:100%;box-shadow:none;">
                    </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <div class="body_offer">
                        <img src="img/regionpdl.jpg" alt="" style="max-width:100%;max-height:100%;box-shadow:none;">
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

              // If the count down is finished, write some text
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
              }
            }, 1000);
            </script>

            


@endsection

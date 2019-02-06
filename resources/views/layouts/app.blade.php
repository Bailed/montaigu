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
            @yield('content')
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

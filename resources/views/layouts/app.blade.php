<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="SUKD6oVksoHbhr7eI4b5T0Uy9amFVBXM2qHalHdE2Mw" />

        <title>Salon de l'emploi | Terres de Montaigu - Communauté de communes</title>

        <!-- Fonts -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/landing-page.css')}}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css')}}">
        <style type="text/css">
          html, body {
            margin: 0;
            padding: 0;
          }

          * {
            box-sizing: border-box;
          }

          .slider {
              width: 100%;
              margin: 100px auto;
          }

          .slick-slide {
            margin: 0px 20px;
          }

          .slick-slide img {
            width: 100%;
          }

          .slick-prev:before,
          .slick-next:before {
            color: #E5007D;
          }


          .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
          }

          .slick-active {
            opacity: .5;
          }

          .slick-current {
            opacity: 1;
          }
        </style>

        <style media="screen">
            .first_letter {
                background: url("{{ asset('img/rond-titres.png')}}") no-repeat;
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
                background: url("{{ asset('img/icon-survol1.svg')}}") no-repeat !important;
                background-size:full !important;
                background-position:left center;
                width:120px !important;
                height:120px !important;
                margin-left:auto !important;
                margin-right:auto !important;

            }
        </style>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135897961-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-135897961-1');
        </script>

      </head>

      <body>

        <!-- Navigation -->
        <nav class="navbar navbar-light bg-light static-top text-center">
          <div class="container text-center">
            <a class="navbar-brand" href="/" style="margin-left:42.5%;margin-right:auto;">
                <img src="{{ asset('img/logo.png')}}" alt="" style="width:150px;">
            </a>
            <ul class="nav nav-pills">
              <li role="presentation">
                  <a href="https://www.facebook.com/terresdemontaigu/" target="_blank"><img src="{{ asset('img/icon-f.svg')}}" alt="" style="width:25px;margin-left:0.2em;margin-right:0.2em;"></a>
              </li>
              <li role="presentation">
                  <a href="https://www.linkedin.com/company/terres-de-montaigu/about/" target="_blank"><img src="{{ asset('img/icon-in.svg') }}" alt="" style="width:25px;margin-left:0.2em;margin-right:0.2em;"></a>
              </li>
              <!--
              <li role="presentation">
                  <a href="#"><img src="{{ asset('img/icon-t.svg') }}" alt="" style="width:25px;margin-left:0.2em;margin-right:0.2em;"></a>
              </li>
            -->
              @if(!Auth::user())
              <li role="presentation">
                    <a href="{{route('login')}}">
                        <i class="fas fa-sign-in-alt" style="padding:0.35em 0.5em 0.5em 0.5em;color:#E5007D"></i>
                    </a>
              </li>
              @else
              <li class="presentation">
                  <a href="{{route('home')}}">
                      <i class="fas fa-home" style="padding:0.35em 0.5em 0.5em 0.5em;color:#E5007D"></i>
                  </a>
              </li>
              @if(Auth::user()->company()->uid == "administration")
              <li class="presentation">
                  <a href="{{route('admin.dashboard')}}">
                      <i class="fas fa-cogs" style="padding:0.35em 0.5em 0.5em 0.5em;color:#E5007D"></i>
                  </a>
              </li>
              @endif
              <li role="presentation">
                    <a href="{{route('logout')}}">
                        <i class="fas fa-sign-out-alt" style="padding:0.35em 0.5em 0.5em 0.5em;color:#E5007D"></i>
                    </a>
              </li>
              @endif
            </ul>
          </div>
        </nav>
            @yield('content')
            <!-- Footer -->
            <footer class="footer" style="color:white;background-color:#31328A">
              <div class="container-fluid" style="width:90%">
                <div class="row" style="padding-bottom:2em;">
                    <h4>Comment se rendre à destination emploi ?</h4>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10888.061833880218!2d-1.3082358!3d46.981031!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xacb76df32b7afef6!2zVGjDqcOidHJlIGRlIFRoYWxpZQ!5e0!3m2!1sfr!2sfr!4v1549541249517" height="350" frameborder="0" style="width:100%;border:0;padding-bottom:3em;" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <h5 class="first_letter">Contact</h5>
                        </div>
                        <div class="row" style="text-align:left">
                            <ul style="list-style:none;">
                                <li><b>Terres de Montaigu</b></li>
                                <li>35 Avenue Villebois Mareuil</li>
                                <li>85600 Montaigu-Vendée</li>
                                <li><b>Du lundi au vendredi</b></li>
                                <li>9h-12h30 / 14h-17h30</li>
                                <li><a href="tel:0251464544" style="color:white;text-decoration:underline">Tel : 02.51.46.45.44</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <h5 class="first_letter">Accès</h5>
                        </div>
                        <div class="row">
                            <p style="text-justify;width:80%;margin-left:auto;margin-right:auto;">A 10 minutes à pied de la gare SNCF TER Montaigu-Vendée, accessible depuis Nantes et La Roche-sur-Yon
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3" style="background: url('{{ asset("img/m-footer.png")}}') no-repeat;background-size:70%;background-position:left center;">
                        <div class="row">
                            <h5 class="first_letter">Liens utiles</h5>
                        </div>
                        <div class="row">
                            <p style="text-justify;width:80%;margin-left:auto;margin-right:auto;">
                                <a target="_blank" style="color:white;text-decoration:underline;" href="http://www.terresdemontaigu.fr/">Terres de Montaigu</a>
                                <br><a target="_blank" style="color:white;text-decoration:underline;" href="https://www.pole-emploi.fr/annuaire/montaigu-85010">Pole Emploi Montaigu</a>
                                <br><a target="_blank" style="color:white;text-decoration:underline;" href="http://www.emploi.vendee.fr">Emploi Vendée</a>
                                <br><a target="_blank" style="color:white;text-decoration:underline;" href="http://www.paysdelaloire.fr">Pays de la Loire</a>
                            </p>
                        </div>
                    </div>

                </div>
              </div>
            </footer>

            <!-- Bootstrap core JavaScript -->
            <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
            <script src="{{ asset('js/slick.js')}}" type="text/javascript" charset="utf-8"></script>
            <script type="text/javascript">
              $(document).on('ready', function() {
                if ($(window).width() < 768) {
                    var nbSlide = 1;
                }
                else {
                    var nbSlide = 5;
                }
                $(".center").slick({
                  dots: true,
                  infinite: true,
                  centerMode: true,
                  slidesToShow: nbSlide,
                  slidesToScroll: 2
                });
              });
              $(document).ready(function() {
            // Get media - with autoplay disabled (audio or video)
            var media = $('video').not("[autoplay='autoplay']");
            var tolerancePixel = 40;

            function checkMedia(){
                // Get current browser top and bottom
                var scrollTop = $(window).scrollTop() + tolerancePixel;
                var scrollBottom = $(window).scrollTop() + $(window).height() - tolerancePixel;

                media.each(function(index, el) {
                    var yTopMedia = $(this).offset().top;
                    var yBottomMedia = $(this).height() + yTopMedia;

                    if(scrollTop < yBottomMedia && scrollBottom > yTopMedia){ //view explaination in `In brief` section above
                        $(this).get(0).play();
                    } else {
                        $(this).get(0).pause();
                    }
                });

                //}
            }
            $(document).on('scroll', checkMedia);
            });
          </script>
          </body>

        </html>

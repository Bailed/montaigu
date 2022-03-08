@extends('layouts.app')
@section('content')
<style media="screen">

.slick-dots {display:none !important;}

#demo {
    position:relative;width:200px;height:40px;text-align:center;margin-top:-12em;right:20%;float:right;background: url('img/date.svg') no-repeat;font-weight:bold;line-height: 1.1em;
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
            <div class="col-xl-12 mx-auto text-right" style="margin-right:10%;">
                <p style="font-size:1.3em;"><br><b>17 mars 2022 - 9h à 20h</b><br><b>Pôle Sportif Maxime Bossis<br>Montaigu-Vendée<br></b></p>
                <img src="img/destination-emploi.svg" alt="" style="width:50%;">
                <p style="font-size:2.3em;text-shadow: 1px 1px 2px #E5007D;margin-top:1em;">Le rendez-vous <br> pour rencontrer<br>des entreprises<br> qui recrutent.</p>
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
                        <p class="lead mb-0"><b style="font-size:1em;font-weight:bold;">80 entreprises</b> tous secteurs d'activité</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <img src="img/rencontres.svg" alt="" style="width:4em;margin-left:auto;margin-right:auto;">
                        </div>
                        <p class="lead mb-0">Des <b style="font-size:1em;font-weight:bold;">rencontres</b>, des conseils et conférences</p>
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
                    @foreach(scandir(public_path('img/logos/specials/')) as $file)
                        @if($file != '.' && $file != '..')
                            <div style="text-align:center;display:table-cell;vertical-align: middle;">
                                <img src="/img/logos/specials/{{$file}}">
                            </div>
                        @endif
                    @endforeach
                    @foreach(\App\Model\Company::get() as $company)
                        @if($company->logo != null && $company->logo != '')
                            <div style="text-align:center;display:table-cell;vertical-align: middle;">
                                <img src="/img/logos/{{$company->logo}}">
                            </div>
                        @endif
                    @endforeach
                </section>
            </div>
        </div>
    </section>

<!-- Image Showcases -->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6 text-white">
                <div class="embed-responsive embed-responsive-16by9" style="width:100%;height:100%;">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ftM3xERHys4" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 showcase-text showcase-text-special">
                <h2 class="first_letter" style="color:#2C2D78"> Destination Emploi : une journée pour trouver un emploi et bien plus encore.</h2>
                <p class="lead mb-0" style="padding-left:1.5em;color:#2C2D78;font-size:1.2em;">Destination Emploi, c’est la journée incontournable de l’emploi à Terres de Montaigu. Que vous soyez à la recherche d’un emploi, étudiant, en reconversion ou simplement à l’écoute de nouvelles opportunités, vous y trouverez de nombreuses offres d’emploi disponibles immédiatement ainsi que toutes les informations sur la formation professionnelle et la reconversion.</h2>
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
                    <div class="col-lg-2 text-center">
                        <div class="work_thumb" style="background: url('img/icon-metallerie.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                        <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">Métallerie</h6>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="work_thumb" style="background: url('img/icon-agro.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                        <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">Alimentaire</h6>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="work_thumb" style="background: url('img/icon-btp.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                        <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">Construction et Aménagement</h6>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="work_thumb" style="background: url('img/icon-service.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                        <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">Service à la personne</h6>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="work_thumb" style="background: url('img/icon-logistique.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                        <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">Transport de voyageurs et marchandises</h6>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="work_thumb" style="background: url('img/icon-administration.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"></div>
                        <h6 style="color:#01B1BB;margin-top:1em;font-size:0.8em;">Administration</h6>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials text-center" style="background-color:#31328A;color:white;">
            <div class="container">
                <div class="row">
                    <h2 class="mb-5 first_letter" style="margin-left:auto;margin-right:auto;">Toutes les offres d'emploi.</h2>
                </div>
                <div class="row">

                    @if(count($jobs) > 9)
                    <section class="center slider">
                        @foreach($jobs as $job)
                        <div style="text-align:center;display:table-cell;vertical-align: middle;">
                            @if($job->company()->activity_area == "industry")<p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;"> Industrie
                                @elseif($job->company()->activity_area == "bat")<p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Construction, Travaux publics
                                    @elseif($job->company()->activity_area == "b2c")<p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Service aux particuliers
                                        @elseif($job->company()->activity_area == "b2b")<p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Service aux entreprises
                                            @elseif($job->company()->activity_area == "commerce")<p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Commerce de détails
                                                @elseif($job->company()->activity_area == "transport")<p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Transport et Logistique
                                                    @elseif($job->company()->activity_area == "hotel")<p style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Hôtellerie et Restauration
                                                        @endif
                                                    </p>
                                                    @if($job->company()->logo)
                                                    <img src="img/logos/{{$job->company()->logo}}" style="margin-top:-1em;padding-bottom:1em;" alt="">
                                                    @else
                                                    <img src="img/programme-fond.png" style="height:100px;margin-top:-1em;padding-bottom:1em;" alt="">
                                                    @endif
                                                    <p style="text-align:center;">{{$job->name}}</p>
                                                </div>
                                                @endforeach
                                            </section>
                                            <div class="col-12 text-center">
                                                <h5 style="font-weight:400;"><a href="{{route('jobs.index')}}" style="color:white;text-decoration:underline">Découvrir toutes les offres sur notre page dédiée</a></h5>
                                            </div>
                                            @else
                                            <div class="col-12 text-center">
                                                <h5 style="font-weight:400;">Les offres seront bientôt disponibles !</h5>
                                            </div>
                                            @endif
                                        </div>
                                    </section>
                                    <section class="showcase" style="background-color:#FA007E;">
                                        <div class="container-fluid p-0">
                                            <div class="row no-gutters">
                                                <div class="col-lg-6 showcase-img" style="background: url('img/jeunes_terresdemontaigu.png') no-repeat;background-size:contain;background-position:left bottom;background-color:#e5e7e6">
                                                    <div style="padding-right:2em;padding-top:4em;" class="new_place text-right">
                                                        <h2 style="color:#32338A;">NOUVEAUTÉ</h2>
                                                        <p class="lead mb-0" style="color:#32338A;padding-left:1.5em;">
                                                            <br>
                                                            <b>« JEUNES TALENTS » : </b><br>
                                                            <p style="color:#32338A;font-size:1.3em;font-weight:bold">
                                                                <p style="color:#32338A;">Vous êtes à la recherche d’un stage,<br>
                                                                    d’une alternance, d’un apprentissage,<br>
                                                                    d’un job saisonnier ou étudiant,
                                                                <br>
                                                                <h3 style="color:#2C2D78;padding-left:1em;">de 17h à 19h,</h3>
                                                                <p style="color:#32338A;padding-left:1.7em;">un temps vous est dédié <br>pour rencontrer les entreprises<br> en recherche de Jeunes Talents. </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 showcase-text">
                                                            <div style="" class="new_place">
                                                                <h2 class="first_letter" style="color:white;">Nouveau lieu, nouveau format, nouvelle destination pour l'emploi
                                                                    <br><br>Entrée libre et gratuite</h2>
                                                                    <p class="lead mb-0" style="color:white;padding-left:1.5em;">
                                                                        <br>
                                                                        <b>Nouveautés 2022</b><br>
                                                                        Un nouveau lieu, le pôle sportif Maxime Bossis et ses 1 350 m² dédiés à l’emploi pour l’occasion
                                                                        <br><br>
                                                                        <b>Destination Emploi 2019, objectif atteint et dépassé</b><br>
                                                                        - 2 200 visiteurs<br>
                                                                        - 70 entreprises et établissements recruteurs
                                                                        <br>
                                                                        <h3 style="color:#2C2D78;padding-left:1em;">Rendez-vous le 17 mars 2022 !</h3>
                                                                        <p style="color:white;padding-left:1.7em;">Pôle sportif Maxime Bossis / Montaigu-Vendée / 9h-20h</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section class="testimonials text-center" style="background: url('img/programme-fond.png') no-repeat;background-size:cover">
                                                        <div class="container">
                                                            <div class="row">
                                                                <h2 class="first_letter" style="margin-left:auto;margin-right:auto;color:white">Programme et organisation du salon</h2>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-3 text-center">
                                                                    <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;">
                                                                        <p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">10:00</p>
                                                                    </div>
                                                                    <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Handicap et recherche d'emploi, en parler ou pas ? (45min)</b>
                                                                    <br>Les bons conseils et les outils pour parler de son handicap tout au long de son parcours de recherche d’emploi.
                                                                    Avec le témoignage du DRH de La Laiterie de Montaigu</p>
                                                                </div>
                                                                <div class="col-lg-3 text-center">
                                                                <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">11:00</p></div>
                                                                <p style="color:white;margin-top:1em;font-size:0.8em;">
                                                                    <b>Connaissez-vous Terres de Montaigu ? (45min)</b>
                                                                <br>Son organisation, sa démographie, son économie, on vous dit tout sur Terres de Montaigu.</p>


                                                                </div>
                                                                <div class="col-lg-3 text-center">
                                                                <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">12:00</p></div>
                                                                <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Se reconvertir, Se former, Faire le point sur mes compétences, comment faire ? (45min)</b>
                                                                <br>Les opérateurs du CEP et Transition Pro vous expliquent tout sur
                                                                - Le Conseil en Evolution professionnelle : un accompagnement pour construire mon projet d’évolution professionnelle
                                                                - Le Projet de transition Professionnelle : le congé de formation pour me reconvertir</p>
                                                                </div>
                                            <div class="col-lg-3 text-center">
                                            <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">14:00</p></div>
                                            <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Quelles sont les multiples facettes des métiers des services à la personne ? Venez découvrir le témoignage de professionnels (30min)</b>
                                            <br>Agent d’accompagnement en EHPAD, aide-soignante en EHPAD et aide à domicile ; ces professionnels viennent vous présenter leur parcours et leur quotidien</p>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                        <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">14:45</p></div>
                                        <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Terres de Montaigu, terres d’industrie, quelles opportunités d’emploi ? (45min)</b>
                                        <br>Le secteur industriel est le 1er employeur de Terres de Montaigu, venez découvrir les entreprises qui font le bassin industriel du territoire et la diversité des métiers qui se cachent derrière ce secteur.</p>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                    <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">15:45</p></div>
                                    <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Et si vous deveniez artisan de la rénovation énergétique ?</b>
                                    <br>Travailler dans le bâtiment c’est aussi être acteur de la rénovation énergétique : tout savoir sur ces métiers, les formations et les offres d’emploi.
                                    Avec le témoignage d’une entreprise de la Construction Ecologique (SARL David Guibert à Cugand).</p>
                                </div>
                                <div class="col-lg-4 text-center">
                                <div class="work_thumb" style="background: url('img/icon-programme.svg') no-repeat;background-size:full;width:120px;height:120px;background-position:center center;margin-left:auto;margin-right:auto;"><p style="color:white;padding-left:15px;padding-top:40px;font-size:2em;">17:30</p></div>
                                <p style="color:white;margin-top:1em;font-size:0.8em;"><b>Le BAFA, c'est quoi ?</b>
                                <br>Viens trouver toutes les infos utiles pour passer ton BAFA, découvrir la formation et les aides dont tu peux bénéficier… Un jeune en cours de formation viendra témoigner de son parcours.</p>
                            </div>
                        </div>
                    -->
                </div>
            </section>
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
            var countDownDate = new Date("March 17, 2022 00:00:01").getTime();

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
                document.getElementById("demo").innerHTML = "J-" + days + " H- " + hours + "<br> 17 Mars 2022";
                document.getElementById("demo2").innerHTML = "J-" + days + " H- " + hours+ "<br> 17 Mars 2022";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "Aujourd'hui !";
                    document.getElementById("demo2").innerHTML = "Aujourd'hui !";
                }
            }, 1000);
            </script>




            @endsection

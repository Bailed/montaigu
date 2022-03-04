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

<section class="testimonials text-center" style="background-color:#31328A;color:white;">
    <div class="container">
        <div class="row text-center">
            <h2 class="mb-5 first_letter" style="margin-left:auto;margin-right:auto;">Toutes les offres d'emploi.</h2>
        </div>
        <div style="text-align:center" class="row text-center">
            <div class="form-group" style="margin-left:auto;margin-right:auto;">
                <label style="text-align:center">Je souhaite voir uniquement les offres de :</label>
                <br>
                <form action="" method="get">
                    <select class="col-md-12 form-control" name="company">
                        <option value="">Tous</option>
                        @foreach(\App\Model\Company::get() as $company)
                            <option value="{{$company->uid}}" @if(isset($_GET['company']) && $_GET['company'] == $company->uid) selected @endif>{{$company->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary" style="background-color:#00B2BB" type="submit">Rechercher</button>
                    <a class="btn btn-danger" href="{{route('jobs.index')}}">Réinitialiser</a>
                </form>
            </div>
        </div>
        <div class="row">
                <?php
                    if(isset($_GET['company']) && $_GET['company'] != '') {
                        $jobs = \App\Model\Job::where('company_uid',$_GET['company'])->get();
                    }
                ?>
                @foreach($jobs as $job)
                    <div class="col-md-3" style="text-align:center;display:table-cell;vertical-align: middle;">
                        <p
                        @if($job->company()->activity_area == "industry") style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.8em;"> Industrie
                        @elseif($job->company()->activity_area == "bat") style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Construction, Travaux publics
                        @elseif($job->company()->activity_area == "b2c") style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Service aux particuliers
                        @elseif($job->company()->activity_area == "b2b") style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Service aux entreprises
                        @elseif($job->company()->activity_area == "commerce") style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Commerce de détails
                        @elseif($job->company()->activity_area == "transport") style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Transport et Logistique
                        @elseif($job->company()->activity_area == "hotel") style="text-align:center;height:50px;vertical-align:middle;width:100%;background-color:#00B2BB;padding-top:0.2em;"> Hôtellerie et Restauration
                        @endif
                        </p>
                        @if($job->company()->logo)
                            <img src="img/logos/{{$job->company()->logo}}" style="width:100%;margin-top:-1em;padding-bottom:1em;" alt="">
                        @else
                            <img src="img/programme-fond.png" style="width:100%;height:100px;margin-top:-1em;padding-bottom:1em;" alt="">
                        @endif
                            <p style="text-align:center;">{{$job->name}}</p>
                    </div>
                @endforeach
        </div>
    </div>
</section>
@endsection

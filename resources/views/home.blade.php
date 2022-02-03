@extends('layouts.app')

@section('content')
<?php $company_values = json_decode(Auth::user()->company()->company_values); ?>
<div class="container" style="margin-bottom:6em;margin-top:6em;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tableau de pilotage <span style="float:right"><a href="{{route('company.update')}}">Modifier</a></span></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <b>Votre société :</b> {{ Auth::user()->company()->name }}
                            <br><b>Adresse : </b> @if(Auth::user()->company()->address) {{ Auth::user()->company()->address }} - {{ Auth::user()->company()->zip }} {{ Auth::user()->company()->town }} @else <i>non défini pour le moment</i> @endif
                            <br><b>Secteur d'activité :</b>
                            @if(Auth::user()->company()->activity_area)
                            @if(Auth::user()->company()->activity_area == "industry")Industrie @endif
                            @if(Auth::user()->company()->activity_area == "bat")Construction, Travaux publics @endif
                            @if(Auth::user()->company()->activity_area == "b2c")Service aux particuliers @endif
                            @if(Auth::user()->company()->activity_area == "b2b")Service aux entreprises @endif
                            @if(Auth::user()->company()->activity_area == "commerce")Commerce de détails @endif
                            @if(Auth::user()->company()->activity_area == "transport")Transport et Logistique @endif
                            @if(Auth::user()->company()->activity_area == "hotel")Hôtellerie et Restauration @endif
                            @else
                            <i>non défini pour le moment</i>
                            @endif
                            <br><b>Nombre de propositions d'emploi sur l'année :</b> @if(Auth::user()->company()->nb_jobs) {{ Auth::user()->company()->nb_jobs }} @else <i>non défini pour le moment</i> @endif
                            <br><b>Les 5 valeurs de l'entreprise :</b> @if($company_values)
                            @foreach($company_values as $value) {{ $value }} @endforeach

                            @endif
                            <br><b>Contrat pour les jeunes :</b>@if(Auth::user()->company()->jeunes) Oui @else Non @endif
                            @if(count(json_decode(Auth::user()->company()->jeunes_types)) > 0)
                            <br><b>Types de contrats :</b>
                            @foreach(json_decode(Auth::user()->company()->jeunes_types) as $type) {{ $type }}, @endforeach
                            @endif
                        </div>
                        <div class="col-md-3">
                            <b>Logo :</b>
                            @if(Auth::user()->company()->logo)
                                <img src="{{asset('img/logos/'.Auth::user()->company()->logo)}}" alt="" width="150">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" style="margin-top:3em;">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Vos offres d'emploi
                    <span style="float:right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#addJob">Ajouter</button>
                        <form action="" method="post">
                            @csrf
                            <div class="modal fade" id="addJob" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ajouter une offre d'emploi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Nom de l'offre</label>
                                                <input class="form-control" type="text" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="3" name="resume"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">URL de l'image de présentation <i><small>(facultatif)</small></i></label>
                                                <input class="form-control" type="text" name="img_url">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                            <button type="submit" class="btn btn-primary">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)
                            <tr>
                                <td>{{$job->name}}</td>
                                <td class="text-justify">{{substr($job->resume, 0, 100)}}...</td>
                                <td class="text-center">
                                    <a href="{{route('job.edit',['uid' => $job->uid])}}"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

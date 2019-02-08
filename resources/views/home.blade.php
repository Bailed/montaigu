@extends('layouts.app')

@section('content')
<?php $company_values = json_decode(Auth::user()->company()->company_values); ?>
<div class="container" style="margin-bottom:6em;margin-top:6em;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tableau de pilotage <span style="float:right"><a href="{{route('company.update')}}">Modifier</a></span></div>
                <div class="card-body">
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
                    <br><b>Les 5 valeurs de l'entreprise :</b> @if($company_values) @foreach($company_values as $value) {{ $value }} @endforeach @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

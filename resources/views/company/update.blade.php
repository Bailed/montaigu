@extends('layouts.app')

@section('content')
<?php $company_values = json_decode(Auth::user()->company()->company_values); ?>
<section class="showcase" style="width:90%;margin-left:5%;background-color:white;background: url('../img/demi-cercle2.svg') no-repeat;background-position: right top;background-size:150px;margin-bottom:5%;">
  <div class="container">
    <div class="row no-gutters">
        <div class="col-lg-12 showcase-text">
            <h2 class="first_letter" style="color:#2C2D78"> Mise à jour de votre entreprise<br>
        </div>
    </div>
    <form action="{{route('company.update.post',['uid' => Auth::user()->company()->uid])}}" method="post">
        @csrf
    <div class="row">
        <div class="col-lg-6">
            <h4>L'entreprise</h4>
                <div class="form-group">
                  <label>Nom de l'entreprise* <small>(obligatoire)</small></label>
                  <input type="text" class="form-control" name="name" value="{{Auth::user()->company()->name}}" disabled>
                </div>
                <div class="form-group">
                  <label>Adresse</label>
                  <input type="text" class="form-control" name="address" value="{{Auth::user()->company()->address}}">
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                      <label>Code postal</label>
                      <input type="text" class="form-control" name="zip" value="{{Auth::user()->company()->zip}}">
                    </div>
                    <div class="form-group col-lg-6">
                      <label>Ville</label>
                      <input type="text" class="form-control" name="town" value="{{Auth::user()->company()->town}}">
                    </div>
                </div>
                <div class="form-group">
                  <label>Secteur d'activité</label>
                    <select class="form-control" name="activity_area">
                        <option value="industry" @if(Auth::user()->company()->activity_area == "industry") selected="selected" @endif>Industrie</option>
                        <option value="bat" @if(Auth::user()->company()->activity_area == "bat") selected="selected" @endif>Construction, Travaux publics</option>
                        <option value="b2c" @if(Auth::user()->company()->activity_area == "b2c") selected="selected" @endif>Service aux particuliers</option>
                        <option value="b2b" @if(Auth::user()->company()->activity_area == "b2b") selected="selected" @endif>Service aux entreprises</option>
                        <option value="commerce" @if(Auth::user()->company()->activity_area == "commerce") selected="selected" @endif>Commerce de détails</option>
                        <option value="transport" @if(Auth::user()->company()->activity_area == "transport") selected="selected" @endif>Transport et Logistique</option>
                        <option value="hotel" @if(Auth::user()->company()->activity_area == "hotel") selected="selected" @endif>Hôtellerie et Restauration</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nombre de poste(s) à pourvoir dans l'entreprise dans l'année</label>
                  <input type="number" class="form-control" name="nb_jobs" min="0"  value="{{Auth::user()->company()->nb_jobs}}">
                </div>
        </div>
        <div class="col-lg-6">
            <h4>Contact principal de l'entreprise</h4>
            <div class="form-group">
              <label>Prénom</label>
              <input type="text" class="form-control" name="contact_first_name"  value="{{Auth::user()->company()->contact_first_name}}">
            </div>
            <div class="form-group">
              <label>Nom</label>
              <input type="text" class="form-control" name="contact_last_name"  value="{{Auth::user()->company()->contact_last_name}}">
            </div>
            <div class="form-group">
              <label>Qualité</label>
              <input type="text" class="form-control" name="contact_status"  value="{{Auth::user()->company()->contact_status}}">
            </div>
            <div class="form-group">
              <label>Téléphone</label>
              <input type="text" class="form-control" name="contact_phone"  value="{{Auth::user()->company()->contact_phone}}">
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <div class="form-check">
               <input type="checkbox" class="form-check-input" name="accompagner" @if(Auth::user()->company()->accompagnement) checked @endif disabled>
               <label class="form-check-label">Je souhaite être accompagné dans la préparation du salon en participant à l'atelier Destination Emploi qui aura lieu le jeudi 28 février 2019 de 8h30 à 11h00 à Montaigu-Vendée (une invitation précise vous sera adressée par email).</label>
             </div>
             <div class="form-check">
                <input type="checkbox" class="form-check-input" name="confirmation" @if(Auth::user()->company()->confirmation) checked @endif disabled>
                <label class="form-check-label">Je confirme ma participation au salon Destination Emploi le vendredi 29 mars 2019 et m'engage à régler une participation de 300€ net de taxe à Terres de Montaigu sur facture.
                </label>
              </div>
        </div>
        <div class="col-lg-12 text-center"><br>
            <h4>Les 5 valeurs de l'entreprise</h4><br>
            <div class="row">
                <div class="col-lg-1">

                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 1</label>
                  <input type="text" class="form-control" name="value_1" @if($company_values->value1) value='{{ $company_values->value1 }}' @endif>
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 2</label>
                  <input type="text" class="form-control" name="value_2" @if($company_values->value2) value="{{ $company_values->value2}}" @endif>
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 3</label>
                  <input type="text" class="form-control" name="value_3" @if($company_values->value3) value="{{ $company_values->value3}}" @endif>
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 4</label>
                  <input type="text" class="form-control" name="value_4" @if($company_values->value4) value="{{ $company_values->value4}}" @endif>
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 5</label>
                  <input type="text" class="form-control" name="value_5" @if($company_values->value5) value="{{ $company_values->value5}}" @endif>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </div>
    </form>
</section>

@endsection

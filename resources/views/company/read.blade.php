@extends('layouts.app')

@section('content')
<?php $company_values = json_decode($company->company_values); ?>
<section class="showcase" style="width:90%;margin-left:5%;background-color:white;background: url('../img/demi-cercle2.svg') no-repeat;background-position: right top;background-size:150px;margin-bottom:5%;">
  <div class="container">
    <div class="row no-gutters">
        <div class="col-lg-12 showcase-text">
            <h2 class="first_letter" style="color:#2C2D78"> Mise à jour de votre entreprise<br>
        </div>
    </div>
    <form action="{{route('company.update.post',['uid' => $company->uid])}}" method="post">
        @csrf
    <div class="row">
        <div class="col-lg-6">
            <h4>L'entreprise</h4>
                <div class="form-group">
                  <label>Nom de l'entreprise* <small>(obligatoire)</small></label>
                  <input disabled type="text" class="form-control" name="name" value="{{$company->name}}">
                </div>
                <div class="form-group">
                  <label>Adresse</label>
                  <input disabled type="text" class="form-control" name="address" value="{{$company->address}}">
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                      <label>Code postal</label>
                      <input disabled type="text" class="form-control" name="zip" value="{{$company->zip}}">
                    </div>
                    <div class="form-group col-lg-6">
                      <label>Ville</label>
                      <input disabled type="text" class="form-control" name="town" value="{{$company->town}}">
                    </div>
                </div>
                <div class="form-group">
                  <label>Secteur d'activité</label>
                    <select class="form-control" name="activity_area">
                        <option value="industry" @if($company->activity_area == "industry") selected="selected" @endif>Industrie</option>
                        <option value="bat" @if($company->activity_area == "bat") selected="selected" @endif>Construction, Travaux publics</option>
                        <option value="b2c" @if($company->activity_area == "b2c") selected="selected" @endif>Service aux particuliers</option>
                        <option value="b2b" @if($company->activity_area == "b2b") selected="selected" @endif>Service aux entreprises</option>
                        <option value="commerce" @if($company->activity_area == "commerce") selected="selected" @endif>Commerce de détails</option>
                        <option value="transport" @if($company->activity_area == "transport") selected="selected" @endif>Transport et Logistique</option>
                        <option value="hotel" @if($company->activity_area == "hotel") selected="selected" @endif>Hôtellerie et Restauration</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nombre de poste(s) à pourvoir dans l'entreprise dans l'année</label>
                  <input disabled type="number" class="form-control" name="nb_jobs" min="0"  value="{{$company->nb_jobs}}">
                </div>
        </div>
        <div class="col-lg-6">
            <h4>Contact principal de l'entreprise</h4>
            <div class="form-group">
              <label>Prénom</label>
              <input disabled type="text" class="form-control" name="contact_first_name"  value="{{$company->contact_first_name}}">
            </div>
            <div class="form-group">
              <label>Nom</label>
              <input disabled type="text" class="form-control" name="contact_last_name"  value="{{$company->contact_last_name}}">
            </div>
            <div class="form-group">
              <label>Qualité</label>
              <input disabled type="text" class="form-control" name="contact_status"  value="{{$company->contact_status}}">
            </div>
            <div class="form-group">
              <label>Téléphone</label>
              <input disabled type="text" class="form-control" name="contact_phone"  value="{{$company->contact_phone}}">
            </div>
        </div>
        <div class="row">
             <div class="col-lg-12 text-center">
                 <div class="form-check">
                    <input disabled type="checkbox" class="form-check-input" name="confirmation" @if($company->confirmation) checked @endif>
                    <label class="form-check-label">Confirmation de présence au salon</label>
                  </div>
            </div>
        </div>
        <div class="col-lg-12 text-center"><br>
            <h4>Les 5 valeurs de l'entreprise</h4><br>
            <div class="row">
                <div class="col-lg-1">

                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 1</label>
                  <input disabled type="text" class="form-control" name="value_1" @if($company_values && $company_values->value1) value='{{ $company_values && $company_values->value1 }}' @endif>
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 2</label>
                  <input disabled type="text" class="form-control" name="value_2" @if($company_values && $company_values->value2) value="{{ $company_values && $company_values->value2}}" @endif>
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 3</label>
                  <input disabled type="text" class="form-control" name="value_3" @if($company_values && $company_values->value3) value="{{ $company_values && $company_values->value3}}" @endif>
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 4</label>
                  <input disabled type="text" class="form-control" name="value_4" @if($company_values && $company_values->value4) value="{{ $company_values && $company_values->value4}}" @endif>
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 5</label>
                  <input disabled type="text" class="form-control" name="value_5" @if($company_values && $company_values->value5) value="{{ $company_values->value5}}" @endif>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center">
                <h5>Les offres</h5>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Entreprise</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                        <tr>
                            <td>{{$job->company()->name}}</td>
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
    </form>
</section>

@endsection

@extends('layouts.app')

@section('content')

<section class="showcase" style="width:90%;margin-left:5%;background-color:white;background: url('../img/demi-cercle2.svg') no-repeat;background-position: right top;background-size:150px;margin-bottom:5%;">
  <div class="container">
    <div class="row no-gutters">
        <div class="col-lg-12 showcase-text">
            <h2 class="first_letter" style="color:#2C2D78"> Formulaire d'inscription de votre entreprise<br>
        </div>
    </div>
    @if(isset($success))
    <div class="alert alert-success" role="alert">
        Félicitations ! Votre demande a bien été enregistrée.
    </div>
    @endif
    <form action="" method="post">
        @csrf
    <div class="row">
        <div class="col-lg-6">
            <h4>L'entreprise</h4>
                <div class="form-group">
                  <label>Nom de l'entreprise</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label>Adresse</label>
                  <input type="text" class="form-control" name="address">
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                      <label>Code postal</label>
                      <input type="text" class="form-control" name="zip">
                    </div>
                    <div class="form-group col-lg-6">
                      <label>Ville</label>
                      <input type="text" class="form-control" name="town">
                    </div>
                </div>
                <div class="form-group">
                  <label>Secteur d'activité</label>
                  <select class="form-control" name="activity_area">
                      <option value="digital">Numérique</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nombre de poste(s) à pourvoir dans l'entreprise dans l'année</label>
                  <input type="text" class="form-control" name="nb_jobs">
                </div>
        </div>
        <div class="col-lg-6">
            <h4>Contact principal de l'entreprise</h4>
            <div class="form-group">
              <label>Prénom</label>
              <input type="text" class="form-control" name="contact_first_name">
            </div>
            <div class="form-group">
              <label>Nom</label>
              <input type="text" class="form-control" name="contact_last_name">
            </div>
            <div class="form-group">
              <label>Qualité</label>
              <input type="text" class="form-control" name="contact_status">
            </div>
            <div class="form-group">
              <label>Téléphone</label>
              <input type="text" class="form-control" name="contact_phone">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name="contact_mail">
            </div>
        </div>
        <div class="col-lg-12 text-center"><br>
            <h4>Les 5 valeurs de l'entreprise</h4><br>
            <div class="row">
                <div class="col-lg-1">

                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 1</label>
                  <input type="text" class="form-control" name="value_1">
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 2</label>
                  <input type="text" class="form-control" name="value_2">
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 3</label>
                  <input type="text" class="form-control" name="value_3">
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 4</label>
                  <input type="text" class="form-control" name="value_4">
                </div>
                <div class="form-group col-lg-2">
                  <label>Valeur 5</label>
                  <input type="text" class="form-control" name="value_5">
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-primary">Envoyer ma demande</button>
        </div>
    </div>
    </form>
</section>

@endsection

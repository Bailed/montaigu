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
                Félicitations ! Votre demande a bien été enregistrée.  <a href="{{route('login')}}">Cliquez ici pour vous connecter.</a>
            </div>
            @endif
            @if(isset($error))
            <div class="alert alert-danger" role="alert">
                Erreur ! Cet email est déjà utilisé.</a>
            </div>
            @endif
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Votre compte</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Email* <small>(obligatoire)</small></label>
                            <input type="text" class="form-control" name="contact_mail" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Mot de passe* <small>(obligatoire)</small></label>
                            <input type="password" class="form-control" name="contact_password" required="required">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Contact principal de l'entreprise</h4>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Prénom</label>
                        <input type="text" class="form-control" name="contact_first_name">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Nom</label>
                        <input type="text" class="form-control" name="contact_last_name">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Qualité</label>
                        <input type="text" class="form-control" name="contact_status">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Téléphone</label>
                        <input type="text" class="form-control" name="contact_phone">
                    </div>
                <div class="col-lg-12">
                    <h4>L'entreprise</h4>
                </div>
                    <div class="form-group col-lg-6">
                        <label>Numéro de SIREN* <small>(obligatoire)</small></label>
                        <input type="text" class="form-control" name="siren" required="required">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Nom de l'entreprise* <small>(obligatoire)</small></label>
                        <input type="text" class="form-control" name="name" required="required">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Adresse* <small>(obligatoire)</small></label>
                        <input type="text" class="form-control" name="address" required="required">
                    </div>
                        <div class="form-group col-lg-3">
                            <label>Code postal* <small>(obligatoire)</small></label>
                            <input type="text" class="form-control" name="zip" required="required">
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Ville* <small>(obligatoire)</small></label>
                            <input type="text" class="form-control" name="town" required="required">
                        </div>
                    <div class="form-group col-lg-6">
                        <label>Secteur d'activité</label>
                        <select class="form-control" name="activity_area">
                            <option value="industry">Industrie</option>
                            <option value="bat">Construction, Travaux publics</option>
                            <option value="b2c">Service aux particuliers</option>
                            <option value="b2b">Service aux entreprises</option>
                            <option value="commerce">Commerce de détails</option>
                            <option value="transport">Transport et Logistique</option>
                            <option value="negoce">Négoce</option>
                            <option value="hotel">Hôtellerie et Restauration</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Nombre de poste(s) à pourvoir dans l'année <small>(obligatoire)</small></label>
                        <input type="number" class="form-control" name="nb_jobs" min="0" required="required">
                    </div>
                    <div class="form-group col-lg-6">
                        <p>Avez-vous des postes à destination des jeunes de type cstage, apprentissage, alternance, job saisonnier, job étudiant ?* <small>(obligatoire)</small></p>
                        <input type="radio" name="job-jeune" value="yes" required="required">
                        <label for="">Oui</label>
                        <input type="radio" name="job-jeune" value="no" required="required">
                        <label for="">Non</label>
                    </div>
                    <div class="form-group col-lg-6">
                        <p>Si oui, type de contrats :</p>
                        <input type="checkbox" name="job-jeune-type[]" value="Stage">
                        <label>Stage</label>
                        <input type="checkbox" name="job-jeune-type[]" value="Alternance">
                        <label>Alternance</label>
                        <input type="checkbox" name="job-jeune-type[]" value="Saison">
                        <label>Job saisonnier</label>
                        <input type="checkbox" name="job-jeune-type[]" value="Autre">
                        <label>Autres</label>
                    </div>
                    <div class="col-lg-12">
                        <h3>Choisir les dates pour les ateliers de préparation</h3>
                        <p>« La marque employeur et l’approche compétences pour recruter et intégrer mes nouveaux talents »

Terres de Montaigu et ses partenaires, Pôle Emploi et la Maison Départementale du Développement Economique et de l’Emploi (MDEDE), vous propose un atelier de préparation au salon. </p>
                    </div>
                    <div class="form-group col-lg-4">
                        <p>Trouvez plus de candidats avec l'approche compétences</p>
                        <input type="radio" name="atelier-1" value="20-01-2022" required="required">
                        <label for="">20 Janvier 8h30 - 10h30</label><br>
                        <input type="radio" name="atelier-1" value="27-01-2022" required="required">
                        <label for="">27 Janvier 8h30 - 10h30</label>
                    </div>
                    <div class="form-group col-lg-4">
                        <p>Marque employeur : communiquer pour mieux recruter</p>
                        <input type="radio" name="atelier-2" value="20-01-2022" required="required">
                        <label for="">20 Janvier 8h30 - 10h30</label><br>
                        <input type="radio" name="atelier-2" value="27-01-2022" required="required">
                        <label for="">27 Janvier 8h30 - 10h30</label>
                    </div>
                    <div class="form-group col-lg-4">
                        <p>Rédiger une offre d’emploi attractive. Les clés d’une intégration réussie</p>
                        <input type="radio" name="atelier-3" value="20-01-2022" required="required">
                        <label for="">20 Janvier 8h30 - 10h30</label><br>
                        <input type="radio" name="atelier-3" value="27-01-2022" required="required">
                        <label for="">27 Janvier 8h30 - 10h30</label>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="confirmation" required="required">
                        <label class="form-check-label">Je confirme ma participation au salon Destination Emploi le vendredi 29 mars 2019 et m'engage à régler une participation de 400€ net de taxe à Terres de Montaigu sur facture.
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

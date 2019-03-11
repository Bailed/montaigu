@extends('layouts.app')

@section('content')

<div class="container" style="padding-top:3em;padding-bottom:3em;">
    <h4>Administration des entreprises ({{ count($companies) }}) et des offres ({{ count($jobs) }})</h4>
    <div class="row">
        <div class="col-lg-12">
            <h5>Les entreprises</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Contact</th>
                        <th>Autre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    @if($company->uid != "administration")
                        <tr>
                            <td><a href="{{route('company.read',['uid' => $company->uid])}}">{{$company->name}}</a></td>
                            <td>{{$company->contact_mail}}</td>
                            <td>{{$company->address}} <br> {{$company->zip}} {{$company->town}}</td>
                            <td>
                                {{$company->contact_first_name}} {{$company->contact_last_name}}<br>
                                {{$company->contact_status}}<br>
                                <a href="tel:{{$company->contact_phone}}">{{$company->contact_phone}}</a> | <a href="tel:{{$company->contact_mail}}">{{$company->contact_mail}}</a>
                            </td>
                            <td>
                                <b>Confirmation :</b> @if($company->confirmation) Oui @else Non @endif <br>
                                <b>Accompagnement :</b> @if($company->accompagnement) Oui @else Non @endif <br>
                                <a href="{{route('company.read',['uid' => $company->uid])}}">Fiche</a> <br>
                                Nombre d'offres : {{ count($company->jobs()) }}
                            </td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <?php $company_values = json_decode($company->company_values); ?>
                            @if($company_values)<td colspan="5">Valeurs : @foreach($company_values as $value) | {{$value}} | @endforeach </td>@endif
                        </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@extends('layouts.app')

@section('content')

<div class="container" style="padding-top:3em;padding-bottom:3em;">
    <h4>Administration des entreprises et des offres</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
            @if($company->uid != "administration")
                <tr>
                    <td>{{$company->name}}</td>
                    <td>{{$company->contact_mail}}</td>
                    <td>{{$company->address}} <br> {{$company->zip}} {{$company->town}}</td>
                    <td>
                        {{$company_first_name}} {{$company_last_name}}<br>
                        {{$company_status}}<br>
                        <a href="tel:{{$company_phone}}">{{$company_phone}}</a> | <a href="tel:{{$company_mail}}">{{$company_mail}}</a>
                    </td>
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>

</div>


@endsection

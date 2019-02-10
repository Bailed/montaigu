@extends('layouts.app')

@section('content')

<div class="container" style="padding-top:3em;padding-bottom:3em;">
    <h4>Administration des entreprises et des offres</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
            @if($company->uid != "administration")
                <tr>
                    <td>{{$company->name}}</td>
                    <td>{{$company->contact_mail}}</td>
                </tr>
            @endif
            @endforeach
        </tbody>
    </table>

</div>


@endsection

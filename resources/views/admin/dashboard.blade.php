@extends('layouts.app')

@section('content')

<div class="container-fluid" style="padding-top:3em;padding-bottom:3em;">
    <h4>Administration des entreprises et des offres</h4>
    <div class="row">
        <div class="col-xs-8">
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
                            <td>{{$company->name}}</td>
                            <td>{{$company->contact_mail}}</td>
                            <td>{{$company->address}} <br> {{$company->zip}} {{$company->town}}</td>
                            <td>
                                {{$company->contact_first_name}} {{$company->contact_last_name}}<br>
                                {{$company->contact_status}}<br>
                                <a href="tel:{{$company->contact_phone}}">{{$company->contact_phone}}</a> | <a href="tel:{{$company->contact_mail}}">{{$company->contact_mail}}</a>
                            </td>
                            <td>
                                <b>Confirmation :</b> @if($company->confirmation) Oui @else Non @endif <br>
                                <b>Accompagnement :</b> @if($company->accompagnement) Oui @else Non @endif
                            </td>
                        </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-xs-4">
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
</div>


@endsection

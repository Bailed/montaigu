@extends('layouts.app')

@section('content')
<section class="showcase" style="width:90%;margin-left:5%;background-color:white;background: url('../img/demi-cercle2.svg') no-repeat;background-position: right top;background-size:150px;margin-bottom:5%;">
  <div class="container">
    <div class="row no-gutters">
        <div class="col-lg-12 showcase-text">
            <h2 class="first_letter" style="color:#2C2D78"> Modifier votre offre d'emploi<br></h2>
        </div>
    </div>
    <form action="{{route('job.edit.post',['uid' => $job->uid])}}" method="post">
        @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <label for="">Nom de l'offre</label>
                <input class="form-control" type="text" name="name" value="{{$job->name}}">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" rows="5" name="resume">{{$job->resume}}</textarea>
            </div>
        </div>
        <div class="col-lg-4">
            @if($job->img_url)
            <img src="{{$job->img_url}}" style="width:100%;" alt="">
            @else
            <img src="{{ asset('img/programme-fond.png') }}" style="width:100%;" alt="">

            @endif
            <div class="form-group">
                <label for="">URL de l'image de présentation <i><small>(facultatif)</small></i></label>
                <input class="form-control" type="text" name="img_url"  value="{{$job->img_url}}">
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-primary" style="margin:2em;">Modifier</button><br>
            <a href="{{route('home')}}">Retour à mon tableau de pilotage</a><br>
        </div>
    </div>
    </form>
    <a href="{{route('job.delete',['uid' => $job->uid])}}"><button type="button" class="btn btn-danger float-right">Supprimer l'offre</button></a>
</section>

@endsection

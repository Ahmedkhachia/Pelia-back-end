@extends('layouts.app')

@section('content')
<div class="container">
@if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        
                        </div>
                @endif
<h1 class="text-center">Liste des Medecins</h1>
@foreach($Liste as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/user.png')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item->prenom}} {{$item->nom}}</h5>
     <p>{{$item->Type}}</p>
        <form action="" method="POST">
           {{csrf_field()}}
            {{method_field('DELETE')}}
             <!-- <a href="" class="btn btn-primary">Détails</a> -->
             <a href="" class="btn btn-primary">Voir le profil</a>
             <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
  </li>
  <hr>
</ul>
@endforeach
<div  class=" ">
    <a style="margin-left:45%" href="" href="" class="btn btn-primary">Ajouter un Médecin</a>
</div>


</div>

@endsection
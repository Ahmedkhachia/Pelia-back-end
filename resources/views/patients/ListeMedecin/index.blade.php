@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Liste des Medecins</h1>
@foreach($liste as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/medical-pill.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['prenom']}} {{$item['nom']}}</h5>
      <p class="pull-right"> <span class="h6">Spécialites :</span> @foreach($item['specialite'] as $one){{$one["nom_specialite"]}}, @endforeach</p>
      <form action="{{url('/listePatient/'.$item['id_patients_medecins'])}}" method="POST">
      @if($item['id_type'] != 4)
      <a class="btn btn-success" href="{{url('/profilMedecin/'.$item['id'])}}">Voir le profile</a>
      @else
      <a class="btn btn-primary" href="{{url('/listeMedecin/edit/'.$item['id'])}}">Modifier</a>
      @endif
      
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <button type="submit" class="btn btn-danger">Supprimer</button>
      </form>
      
         </div>
  </li>

     
</ul>
@endforeach


</div>


@endsection
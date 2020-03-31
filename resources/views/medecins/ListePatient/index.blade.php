@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Liste des Patients</h1>
@foreach($liste as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/medical-pill.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item->prenom}} {{$item->nom}}</h5>
      
      <form action="{{url('listePatient/'.$item['id_patients_medecins'])}}" method="POST">
           {{csrf_field()}}
            {{method_field('DELETE')}}
            <a class="btn btn-success" href="{{url('/listeMedecin/'.$item->id)}}">Voir le profile</a>
             <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
     <!-- <p>{{$item['type_medicament']}}</p> -->
         <!-- <p class="pull-right">{{$item['f1']}}</p> -->
         </div>
  </li>

     
</ul>
@endforeach


</div>


@endsection
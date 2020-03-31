@extends('layouts.app')

@section('content')
<div class="container">
@if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        
                        </div>
                @endif
<h1 class="text-center">Liste des médicaments</h1>
@foreach($medicament as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/medical-pill.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['nom_medicament']}}</h5>
     <p>{{$item['type_medicament']}}</p>
     @foreach($item['InfoMedicament'] as $key)
     <p class="pull-right"> <span class="h6">Prise : {{$key['temps']}} </span></p>
     <p class="pull-right"> <span class="h6">Dose : {{$key['dose']}} </span></p>
     @endforeach
         

    @if($item['duree'] == "allonge")
    <p>Durée : Traitement {{$item['duree']}}</p>
    @else
    <p>Durée : {{$item['duree']}} Jrs</p>
    @endif

    

    
        <form action="{{url('medicament/'.$item['id_temps'])}}" method="POST">
           {{csrf_field()}}
            {{method_field('DELETE')}}
             <!-- <a href="" class="btn btn-primary">Détails</a> -->
             <a href="{{url('medicament/'.$item['id_temps'].'/edit')}}" class="btn btn-primary">Modifier</a>
             <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
  </li>
  <hr>
</ul>
@endforeach
<div  class=" ">
    <a style="margin-left:45%" href="{{url('medicament/Ajouter')}}" href="" class="btn btn-primary">Ajouter un médicament</a>
</div>


</div>

@endsection
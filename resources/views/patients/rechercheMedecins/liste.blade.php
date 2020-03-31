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
      <h5 class="mt-0 mb-1">{{$item['prenom']}} {{$item['nom']}}</h5>
     <p> Specialités:  @foreach($item['specialite'] as $key)
           {{$key['nom_specialite']}},
        @endforeach
     </p>
     <p>{{$item['Adresse']}}</p>
     <p>{{$item['phone']}}</p>
     <p>{{$item['nom_ville']}}</p>
        <form action="" method="POST">
           {{csrf_field()}}
            {{method_field('DELETE')}}
             <!-- <a href="" class="btn btn-primary">Détails</a> -->
             <a href="{{url('/profilMedecin/'.$item['id'])}}" class="btn btn-primary">Voir le profil</a>
        </form>
    </div>
  </li>
  <hr>
</ul>
@endforeach


</div>

@endsection
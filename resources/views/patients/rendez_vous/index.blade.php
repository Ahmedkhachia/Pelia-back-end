@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Liste des Rendez-vous</h1>
@foreach($rendez_vous as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/Rndv1.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['prenom']}} {{$item['nom']}}</h5>
      <h5 class="mt-0 mb-1">{{$item['Date_start']}}</h5>
      
      
      <form action="{{url('/rendez-vous/'.$item['id_rendez_vous'])}}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <a class="btn btn-success" href="{{url('/rendez-vous/edit/'.$item['id_rendez_vous'])}}">Modifier</a>
        <button class="btn btn-danger" type="submit" name="submit">Delete</button>
      </form>
      
      
         </div>
  </li>

  
</ul>
@endforeach
    <div class="form-group">
        <a class="btn btn-primary col-md-12" href="{{url('/rendez-vous/create')}}">Ajouter</a>
    </div>
</div>


@endsection
@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Dashboard</h1>
<hr>
<br>
<h1 class="text-center">Liste des patients</h1>
@foreach($liste as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/user.png')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
    <h4> {{$item->nom}}</h4>
      <h5 class="mt-0 mb-1">{{$item['nom_medicament']}}</h5>
     <p>{{$item['type_medicament']}}</p>
         <p class="pull-right">{{$item['f1']}}</p>
         </div>
  </li>
 
</ul>
@endforeach
<hr>
<br>
<h1 class="text-center">FeedBack des Patients   </h1>
@foreach($feed as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/user.png')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
    <h4> {{$item->prenom}} {{$item->nom}}</h4>
      <h5 class="mt-0 mb-1">{{$item['contenue']}}</h5>
     <p>{{$item['date_creation']}}</p>
         </div>
  </li>
 
</ul>
@endforeach


</div>

@endsection
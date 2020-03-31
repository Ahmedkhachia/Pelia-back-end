@extends('layouts.app')

@section('content')
<div class="container">
@if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        
                        </div>
                @endif
<h1 class="text-center">Liste des Contacts</h1>
@if(count($contact) != 0)
@foreach($contact as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/user.png')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['prenom']}} {{$item['nom']}}</h5>
      <a href="{{url('message/'.$item['id'])}}" class="btn btn-primary">Voir les messages </a>
    </div>
  </li>
  <hr>
</ul>
@endforeach

@else

<h3 class="text-center"> Vous n'avez aucun Contact </h3>
@endif
<!-- <div  class=" ">
    <a style="margin-left:45%" href="" href="" class="btn btn-primary">Ajouter un médicament</a>
</div> -->


</div>

@endsection
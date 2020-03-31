@extends('layouts.app')

@section('content')
<div class="container">
@if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        
                        </div>
                @endif
<h1 class="text-center">Messages</h1>
@foreach($messages as $item)

<ul class="list-unstyled">
@if($item["id_seder"] == Auth::user()->id)
  <li class="media text-right">
    
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['prenom']}} {{$item['nom']}}</h5>
      <p class="">{{$item["message"]}}</p>
    </div>
    <img src="{{URL::asset('/images/ali.jpg')}}" width="60" class="ml-3" alt="...">
  </li>
  @else
  <li class="media">
    <img src="{{URL::asset('/images/user.png')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['prenom']}} {{$item['nom']}}</h5>
      <p class="">{{$item["message"]}}</p>
    </div>
  </li>
  @endif
  <hr>
</ul>
@endforeach
<!-- <div  class=" ">
    <a style="margin-left:45%" href="" href="" class="btn btn-primary">Ajouter un médicament</a>
</div> -->


</div>

@endsection
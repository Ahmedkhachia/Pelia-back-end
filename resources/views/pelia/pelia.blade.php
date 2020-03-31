@extends('layouts.app')

@section('content')

@foreach($ms as $item)
<ul>
    <li>{{$item->prenom}}</li>
</ul>
@endforeach

    <p>{{$date[0]}}</p>

@endsection
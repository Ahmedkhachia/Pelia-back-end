@extends('layouts.app')


@section('content')

    @if(count($errors))
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('test')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                         <label for="">Nom de mesure</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="">Unité</label>
                        <textarea name="unite" class="form-control" ></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-primary" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>
    </div>  

@endsection
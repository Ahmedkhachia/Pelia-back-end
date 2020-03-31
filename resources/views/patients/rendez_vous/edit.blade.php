@extends('layouts.app')


@section('content')

    <div class="container">
        <h1 class="text-center">Modifier un Rendez-vous</h1>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('rendez-vous/edit/'.$id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                         <label for="">Date</label>
                        <input type="text" name="date" class="form-control" value="{{$DateRndv}}">
                    </div>
                    <div class="form-group">
                         <label for="">Time</label>
                        <input type="text" name="time" class="form-control" value="{{$TimeRndv}}">
                    </div>
                   
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-danger" value="Modifier">
                    </div>
                </form>
            </div>
        </div>
    </div>  

@endsection
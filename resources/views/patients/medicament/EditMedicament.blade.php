@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('medicament/'.$data['id_temps'])}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                         <label for="">Frequence 1</label>
                        <input type="text" name="fr1" class="form-control" value="{{$data['f1']}}">
                    </div>
                    <div class="form-group">
                         <label for="">Frequence 2</label>
                        <input type="text" name="fr2" class="form-control" value="{{$data['f2']}}">
                    </div>
                    <div class="form-group">
                         <label for="">Frequence 3</label>
                        <input type="text" name="fr3" class="form-control" value="{{$data['f3']}}">
                    </div>
                    <div class="form-group">
                         <label for="">Frequence 4</label>
                        <input type="text" name="fr4" class="form-control" value="{{$data['f4']}}">
                    </div>
                   
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-danger" value="Modifier">
                    </div>
                </form>
            </div>
        </div>
    </div>  

@endsection
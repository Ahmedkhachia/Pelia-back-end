@extends('layouts.app')


@section('content')

    <div class="container">
    <h1 class="text-center">Ajouter un rendez-vous</h1>
        <div class="row">
            <div class="col-md-12">
           
                <form action="{{url('rendez-vous')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                         <label for="">Date</label>
                        <input type="text" name="date" class="form-control" value="">
                    </div>
                    <div class="form-group">
                         <label for="">Time</label>
                        <input type="text" name="time" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Liste des medecins:</label>
                        <select name="select" class="form-control" id="sel1">
                        @foreach ($ListeMedecin as $item)
                            <option  value="{{$item->id}}">{{$item->prenom}} {{$item->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-danger" value="Ajouter">
                    </div>
                </form>
            
            </div>
        </div>
    </div>  

@endsection
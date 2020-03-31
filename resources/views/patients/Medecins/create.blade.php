@extends('layouts.app')


@section('content')

    <div class="container">
    <h1 class="text-center">Ajouter un Médecin</h1>
        <div class="row">
            <div class="col-md-12">
           
                <form action="{{url('medecins')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                         <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control" value="">
                    </div>
                    <div class="form-group">
                         <label for="">Prénom</label>
                        <input type="text" name="prenom" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Spécialité</label>
                        <select name="specialiteSelect" class="form-control" id="sel1">
                        @foreach ($data as $item)
                            <option  value="{{$item->id_specialite}}">{{$item->nom_specialite}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Ville</label>
                        <select name="villeSelect" class="form-control" id="sel1">
                        @foreach ($ville as $item)
                            <option  value="{{$item->id_ville}}">{{$item->nom_ville}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                         <label for="">Adresse</label>
                        <input type="text" name="adresse" class="form-control" value="">
                    </div>
                    <div class="form-group">
                         <label for="">Téléphone</label>
                        <input type="text" name="phone" class="form-control" value="">
                    </div>
                   
                   
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-danger" value="Ajouter">
                    </div>
                </form>
            
            </div>
        </div>
    </div>  

@endsection
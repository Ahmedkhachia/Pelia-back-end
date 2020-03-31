@extends('layouts.app')


@section('content')

    <div class="container">
    <h1 class="text-center">Modifier un Médecin</h1>
        <div class="row">
            <div class="col-md-12">
           
                <form action="{{url('medecins/edit/'.$user->id.'/'.$specUrl)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                         <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control" value="{{$user->nom}}">
                    </div>
                    <div class="form-group">
                         <label for="">Prénom</label>
                        <input type="text" name="prenom" class="form-control" value="{{$user->prenom}}">
                    </div>
                    <div class="form-group">
                         <label for="">Téléphone</label>
                        <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                    </div>
                    <div class="form-group">
                         <label for="">Adresse</label>
                        <input type="text" name="adresse" class="form-control" value="{{$user->Adresse}}">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Spécialité</label>
                        <select name="specialiteSelect"  class="form-control" id="sel1">
                        @foreach ($specialiteMedecin as $item)
                        <option  value="{{$item->id_specialite}}">{{$item->nom_specialite}}</option>
                        @endforeach
                        @foreach ($Specialites as $item)
                            <option  value="{{$item->id_specialite}}">{{$item->nom_specialite}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Ville</label>
                        <select name="villeSelect" class="form-control" id="sel1">
                        <option  value="{{$ville_users->id_ville}}">{{$ville_users->nom_ville}}</option>
                        @foreach ($ville as $item)
                            <option  value="{{$item->id_ville}}">{{$item->nom_ville}}</option>
                        @endforeach
                        </select>
                    </div>
                   
                   
                   
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-danger" value="Modifier">
                    </div>
                </form>
            
            </div>
        </div>
    </div>  

@endsection
@extends('layouts.app')


@section('content')

    <div class="container">
        <h1 class="text-center">Trouvez votre médecin</h1>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('trouvezMedecin/traitement')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                         <label for="">Nom Complet de médecin</label>
                        <input type="text" name="nom_medecin" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Spécialité</label>
                        <select name="specialiteSelect" class="form-control" id="sel1">
                        <option  value="">Choisir la spécialité</option>
                        @foreach ($specialite as $item)
                            <option  value="{{$item->id_specialite}}">{{$item->nom_specialite}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Ville</label>
                        <select name="villeSelect" class="form-control" id="sel1">
                        <option  value="">Choisir la ville</option>
                        @foreach ($ville as $item)
                            <option  value="{{$item->id_ville}}">{{$item->nom_ville}}</option>
                        @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-primary" value="Chercher">
                    </div>
                </form>
            </div>
        </div>
    </div>  

@endsection
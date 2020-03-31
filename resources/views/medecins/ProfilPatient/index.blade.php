@extends('layouts.app')

@section('content')
<div class="container emp-profile">
            <form method="post">
            @foreach ($User as $item)
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    {{$item->prenom}} {{$item->nom}}
                                    </h5>
                                    <h6> {{$item->phone}} </h6>
                                    <h6> {{$item->email}} </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                @endforeach
            </form>           
</div>
<div class="container">
<h1 class="text-center">Liste des médicaments</h1>
@foreach($medicament as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/medical-pill.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['nom_medicament']}}</h5>
     <p>{{$item['type_medicament']}}</p>

     @if( $item['f1'] != "00:00:00" )
         <p>{{$item['f1']}}</p>
    @endif

    @if( $item['f2'] != "00:00:00" )
    <p>{{$item['f2']}}</p>
    @endif

    @if( $item['f3'] != "00:00:00" )
    <p>{{$item['f3']}}</p>
    @endif

    @if( $item['f4'] != "00:00:00" )
    <p>{{$item['f4']}}</p>
    @endif

    @if($item['duree'] == "allonge")
    <p>Durée : Traitement {{$item['duree']}}</p>
    

    @else
    <p>Durée : {{$item['duree']}} Jrs</p>
    @endif
  
        <!-- <form action="{{url('medicament/'.$item['id_temps'])}}" method="POST">
           {{csrf_field()}}
            {{method_field('DELETE')}}
             <a href="{{url('medicament/'.$item['id_temps'].'/edit')}}" class="btn btn-primary">Modifier</a>
             <button type="submit" class="btn btn-danger">Supprimer</button>
        </form> -->
    </div>
  </li>
  <hr>
</ul>
@endforeach
</div>

<h1 class="text-center">Liste des Mesures</h1>
@foreach($mesures as $item)
<div class="container">
<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/mesure.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item->nom_mesure}}</h5>
     <p>{{$item->value}}</p>
        <!-- <form action="" method="POST">
           {{csrf_field()}}
            {{method_field('DELETE')}}
             <a href="" class="btn btn-primary">Modifier</a>
             <button type="submit" class="btn btn-danger">Supprimer</button>
        </form> -->
    </div>
  </li>
  <hr>
</ul>
</div>
@endforeach
@endsection
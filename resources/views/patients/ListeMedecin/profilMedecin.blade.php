@extends('layouts.app')

@section('content')
<div class="container emp-profile">
            <form method="post">
            @foreach ($info as $item)
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
                                    {{$item['prenom']}} {{$item['nom']}}
                                    </h5>
                                    <p>Specialités :
                                        @foreach($specialite as $item)
                                            {{$item->nom_specialite}},
                                        @endforeach
                                    </p>
                                    <p class="proile-rating">Téléphone : <span>{{$item['phone']}}</span></p>
                                    <p class="proile-rating">Adresse : <span>{{$item['Adresse']}}</span></p>
                                    <div class="col-md-8">
                                    <div class="tab-content profile-tab" id="myTabContent">
                                        <a class="btn btn-success" href="{{url('/rendez-vous/medecin/'.$item['id'])}}">Prendre un rendez-vous</a>
                                    </div>
                                    <hr>
                                    <div class="tab-content profile-tab" id="myTabContent">
                                        <a class="btn btn-success" href="{{url('/invitations/create/'.$item['id'])}}">Envoyer une invitation</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div> -->
                    
                </div>
                @endforeach
            </form>           
        </div>
@endsection
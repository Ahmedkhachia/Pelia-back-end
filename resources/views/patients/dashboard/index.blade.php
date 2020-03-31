@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Dashboard</h1>
<br>
<h3 class="text-center">Programme Journalier</h3>
@foreach($programme as $item)

<ul class="list-unstyled">
<!-- @$i=0; -->
@foreach($rendez_vous_today as $key)
<li class="media">
    <img src="{{URL::asset('/images/Rndv1.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1"> {{$key['prenom']}} {{$key['nom']}}</h5>
         <p class="pull-right">{{$key['Date_start']}} à {{$key['cabinet']}}</p>
         <p class="pull-right"><span class="h6">Spécialites :</span> @foreach($key['specialite'] as $one) {{$one['nom_specialite']}},  @endforeach</p>
         </div>
</li>
<!-- @$i++; -->
@endforeach
<hr>

  <li class="media">
    <img src="{{URL::asset('/images/medical-pill.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['nom_medicament']}}</h5>
     <p>{{$item['type_medicament']}}</p>
     @foreach($item['InfoMedicament'] as $key)
     <p class="pull-right"> <span class="h6"> {{$key['temps']}} </span></p>
     @endforeach
         </div>
  </li>
</ul>
@endforeach
<hr>
<h3 class="text-center">Liste des Medicaments</h3>
@foreach($medicament as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/medical-pill.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['nom_medicament']}}</h5>
     <p>{{$item['type_medicament']}}</p>
     @foreach($item['InfoMedicament'] as $key)
     <p class="pull-right"> <span class="h6">Prise 1: {{$key['temps']}} </span></p>
     @endforeach
         </div>
  </li> 
</ul>
@endforeach
<hr>
<h3 class="text-center">Liste des Rendez_vous</h3>
@foreach($rendez_vous as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/Rndv1.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['prenom']}}  {{$item['nom']}}</h5>
          <p>{{$item['Date_start']}} {{$item['cabinet']}}</p>
          <p class="pull-right"> <span class="h6">Spécialites :</span> @foreach($item['specialite'] as $one){{$one["nom_specialite"]}}, @endforeach</p>

    </div>
  </li>
</ul>
@endforeach
<hr>
<h3 class="text-center">Liste Medecins</h3>
@foreach($medecins as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/user.png')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item['prenom']}}  {{$item['nom']}}</h5>
          <p><span class="h6">Spécialites :</span>@foreach($item['specialite'] as $key)   {{$key['nom_specialite']}}, @endforeach</p>
    </div>
  </li>
</ul>
@endforeach
<hr>
<h3 class="text-center">Liste des Mesures</h3>
@foreach($mesures as $item)

<ul class="list-unstyled">
  <li class="media">
    <img src="{{URL::asset('/images/mesure.svg')}}" width="60" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$item->nom_mesure}}</h5>
          <p>{{$item->value}}  {{$item->unite}}</p>
    </div>
  </li>
</ul>
@endforeach
<ul class="d-none">
    @foreach($days[0] as $key)
    <li class="date">{{$key}}</li>
    @endforeach
</ul>

<ul class="d-none">
    @foreach($days[1] as $key)
    <li class="data">{{$key["valeurs"]}}</li>
    @endforeach
</ul>
<canvas id="line-chart"></canvas>


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
var all = document.getElementsByClassName("date");
var all_data = document.getElementsByClassName("data");
var tab=[];
var tab_data=[];
for(i=0; i<all.length; i++){
    tab[i]=all[i].innerHTML;
}
for(i=0; i<all_data.length; i++){
    tab_data[i]=all_data[i].innerHTML;
}
new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: tab,
    datasets: [{ 
        data: [0,20,50,100,100,100,100,50,100,50],
        label: "Doliprane",
        borderColor: "#038dfe",
        fill: false,
         backgroundColor: [
                'rgba(3, 141, 254, 1)'
            ],
      }, { 
        data: [0,50,0,20,20,50,50,50,100,50],
        label: "Augmentin",
        borderColor: "#e91e63",
        fill: false,
        backgroundColor: [
                'rgba(233, 30, 99, 1)'
            ],
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Observance Mensuel',
      fontSize: 14,
      fontFamily: "'Roboto', sans-serif",
                fontColor: '#000',
                fontStyle: '500'
    },
    legend: {
            labels: {
                fontSize: 13,
                fontFamily: "'Roboto', sans-serif",
                fontColor: '#000',
                fontStyle: '300'
            }
        },
        scales: {
            
            yAxes: [{

                ticks: {
                    min: 0,
                    max: 100,
                    callback: function (value) {
                        return value + "%"
                    },
                    fontSize: 12,
                    fontFamily: "'Roboto', sans-serif",
                    fontColor: '#000',
                    fontStyle: '500',

                },
                scaleLabel: {
                    display: true,
                    labelString: 'Percentage',
                },
            }],
            xAxes: [{
                
                    ticks: {
                        fontSize: 12,
                        fontFamily: "'Roboto', sans-serif",
                        fontColor: '#000',
                        fontStyle: '500'
                    },
                },

            ]

        }
  }
});
</script>

@endsection
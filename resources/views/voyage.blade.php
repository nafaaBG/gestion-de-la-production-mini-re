@extends('layouts.app')

@section('content')

</div></br></br>   <div class="app-main">
    <div class="app-sidebar sidebar-shadow">
     <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    
                    <li class="app-sidebar__heading">Les Tableaux de bords</li>
                    <li>
                            <a s href="#">
                                    <span class="fas fa-chart-bar" style="margin-right:15px;" ></span> 
                                    Liste des TDBs  
                                    
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{route('voyage')}}">
                                                <i class="metismenu-icon"></i>
                                                Voyages
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{route('arret')}}">
                                                <i class="metismenu-icon">
                                                </i>Arrêts des camions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('conducteur')}}">
                                                <i class="metismenu-icon">
                                                </i>Performances Conducteurs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('camion')}}">
                                                <i class="metismenu-icon">
                                                </i>Performances Camions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('qualite')}}">
                                                <i class="metismenu-icon">
                                                </i>Qualités
                                            </a>
                                        </li>
                                    
                                    
                         
                                
                            </ul>
                        

                    </div>
        </div>
    </div>    <div class="app-main__outer">

        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-chart-bar">
                            </i>
                        </div>
                        <div>OCP Dashboard
                            <div class="page-title-subheading">C'est un tableau de bord de la production minière.
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip"  class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                       
                    </div>    </div>
            </div>        <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total de Voyages ce mois </div>
                            <div class="widget-subheading"></div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>
                                   {{$vv}}
                                </span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="col-md-8 col-xl-4">
                    <div class="card mb-5 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Les Voyages d'Aujourd'hui </div>
                                <div class="widget-subheading"></div>
                            </div>
                            <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>{{$DateVoy}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-9 card">
                        <div class="card-header">Les derniers Voyages
                            <div class="btn-actions-pane-right" >
                                    <form action="{{route('search')}}" method="GET">
                                        <div class="input-group">
                                            <input type="date" name="search" class="form-control">
                                            <span class="input-group-btn">
                                                    &nbsp;&nbsp;<button type="submit" class="btn btn-success">Rechercher</button>
                                            </span>
    </div>
                                    </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">N° Voyage</th>
                                    <th>N° Camion</th>

                                    <th class="text-center">Date</th>
                                    <th class="text-center">Poids</th>
                                    <th class="text-center">Distance</th>
                                </tr>
                                </thead>
                                <tbody>
                                        @foreach ($TousVoys as $voyages)

                                <tr>
                                    <td class="text-center text-muted">{{$voyages->NumVoy}} </td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{$voyages->Num_Cam}}</div>
                                                    <div class="widget-subheading opacity-7">
                                                            @if ($voyages->Num_Cam === 1)
                                                            TEREX
                                                        @elseif ($voyages->Num_Cam == 2)
                                                            BULAZ
                                                        @else
                                                            CAT
                                                        @endif                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">{{$voyages->Date_Debut}}</td>
                                    <td class="text-center">
                                        <div class="badge badge-warning">{{$voyages->Poids}} <b>KG</b></div>
                                    </td>
                                    <td class="text-center">
                                            <div class="badge badge-success"> {{$voyages->Distance}} <b>M</b>  </div>                                 </td>
                                </tr>@endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="d-block text-center card-footer">
                                                           {{ $TousVoy->links() }}
                                
                        </div>
                    </div>
                </div>
            </div>
              
            </div></br>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header-tab-animation card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
TOP 5 Voyages par Poids                     </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                        <div class="card-body" style="height: 340px" >
                                                <canvas id="myChart"></canvas>
                                        </div>
                                      </div>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-18 col-lg-6">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
Top 5 des voyages par la distance                            </div>
                            
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tab-eg-55">
                                <div class="widget-chart p-3">
                                    <div style="height: 380px">
                                        <canvas id="chart" width="400" height="390"></canvas>

</div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
            <div class="row">
                    <div class="col-md-15 col-lg-6">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
      L'origine des voyages                           </div>
                                    
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="tab-eg-55">
                                        <div class="widget-chart p-3">
                                            <div style="height: 280px">
                                                    <canvas id="barChart" width="400" height="270"></canvas>
        
        </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-18 col-lg-6">
                        <div class="mb-3 card">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title">
                                    <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
    Les 10 derniers voyages et ses distances                            </div>
                                
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="tab-eg-55">
                                    <div class="widget-chart p-3">
                                        <div style="height: 280px">
                                            <canvas id="lineChart" width="400" height="390"></canvas>
    
    </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-21 col-lg-12">
                        <div class="mb-3 card">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title">
                                    <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
    nombre des voyages par poste                            </div>
                                
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="tab-eg-55">
                                    <div class="widget-chart p-3">
                                        <div style="height: 380px">
                                            <canvas id="horizontalBarChartCanvas" width="400" height="200"></canvas>
    
    </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
          </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Voyage N°1', 'Voyage N°4', 'Voyage N°5','Voyage N°2','Voyage N°7'],
        datasets: [{
            label: 'Poids KG ',
            backgroundColor: ['rgb(255, 99, 132)',
            "#FFF333",
            "#FF9F33",
        "#33FF9F",
        "#3386FF"],

            borderColor:[ 'rgb(255, 99, 132)',
            "#FFF333",
            "#FF9F33","white","#33FF9F",
        "#3386FF"],
            data: [
                '{{$voy1}}',
                '{{$voy2}}',
                '{{$voy3}}',
                '{{$voy4}}',
                '{{$voy5}}',

                '5'
            ]
        }]
    },

    // Configuration options go here
    options: {}
});
</script>
<script>
     var ctx = document.getElementById("chart");
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['Voyage N°2', 'Voyage N°5', 'Voyage N°3', 'Voyage N°1', 'Voyage N°4'],
    datasets: [{
      label: 'Camions',
      data: [
                '{{$cam1}}',
                '{{$cam2}}',
                '{{$cam3}}',
                '{{$cam4}}',
                '{{$cam5}}'
                
            ],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(50, 199, 200, 0.4)',
        'rgba(45, 162, 123, 0.6)',

        'rgba(255, 206, 86, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(50, 199, 200, 0.4)',
        'rgba(45, 162, 123, 0.6)',
        'rgba(255, 206, 86, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
   	//cutoutPercentage: 40,
    responsive: false,

  }
});
</script>

    <script>
    var canvas = document.getElementById("barChart");
var ctx = canvas.getContext('2d');

// Global Options:




// Data with datasets options
var data = {
    labels: ["Chantier", "Stock"],
      datasets: [
        {
            label: "Stock et Chantier",
            fill: true,
            backgroundColor: [
                'moccasin',
                
                'lightpink'],
            data: [{{$sc1}},{{$sc2}}]
        }
    ]
};

// Notice how nested the beginAtZero is
var options = {
        title: {
                  display: true,
                  text: 'lieu de déversement',
                  position: 'bottom'
              },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
};

// Chart declaration:
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});

    </script>
<script>
var ctx = document.getElementById("lineChart").getContext('2d');


var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Voyage N°1",	"Voyage N°2",	"Voyage N°3",	"Voyage N°4",	"Voyage N°5",	"Voyage N°6",	"Voyage N°7","Voyage N°8",	"Voyage N°9","Voyage N°10"],
        datasets: [{
            label: 'Distance M', // Name the series
            data: [{{$voy1}},{{$voya2}},{{$voya3}},{{$voya4}},{{$voya5}},{{$voya6}},{{$voya7}},{{$voya8}},{{$voya9}},{{$voya10}}], // Specify the data values array
            fill: false,
            borderColor: '#2196f3', // Add custom color border (Line)
            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
            borderWidth: 1 // Specify bar border width
        }]},
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
});
</script>
<script>

var horizontalBarChart = new Chart(horizontalBarChartCanvas, {
   type: 'horizontalBar',
   data: {
      labels: ["P1 : du 07h à 15h", "P2 : du 15h à 23h", "P3 : du 23h à 07h"],
      datasets: [{
         data: [{{$P1}},{{$P2}},{{$P3}}],
         backgroundColor: ["#73BFB8", "#73BFB8", "#73BFB8"], 
      }]
   },
   options: {
      tooltips: {
        enabled: false
      },
      responsive: true,
      legend: {
         display: false,
         position: 'bottom',
         fullWidth: true,
         labels: {
           boxWidth: 10,
           padding: 50
         }
      },
      scales: {
         yAxes: [{
           barPercentage: 0.75,
           gridLines: {
             display: true,
             drawTicks: true,
             drawOnChartArea: false
           },
           ticks: {
             fontColor: '#555759',
             fontFamily: 'Lato',
             fontSize: 11
           }
            
         }],
         xAxes: [{
             gridLines: {
               display: true,
               drawTicks: false,
               tickMarkLength: 5,
               drawBorder: false
             },
           ticks: {
             padding: 5,
             beginAtZero: true,
             fontColor: '#555759',
             fontFamily: 'Lato',
             fontSize: 11,
             
               
           },
            scaleLabel: {
              display: true,
              padding: 10,
              fontFamily: 'Lato',
              fontColor: '#555759',
              fontSize: 16,
              fontStyle: 700,
              labelString: 'Poste'
            },
           
         }]
      }
   }
});


    </script>


</div>
</div>
      
@endsection

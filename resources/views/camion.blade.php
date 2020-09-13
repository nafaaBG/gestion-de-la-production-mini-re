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
                        <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                Buttons
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-inbox"></i>
                                            <span>
                                                Inbox
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span>
                                                Book
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-picture"></i>
                                            <span>
                                                Picture
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a disabled href="javascript:void(0);" class="nav-link disabled">
                                            <i class="nav-link-icon lnr-file-empty"></i>
                                            <span>
                                                File Disabled
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>    </div>
            </div>            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total de Voyages </div>
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
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
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
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Camions</div>
                                <div class="widget-subheading">Total des camions</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$vc}}</span></div>
                            </div>
                        </div>
                    </div></div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-9 card">
                        <div class="card-header">Les Camions
                            <div class="btn-actions-pane-right" >
                                    <form action="{{route('searchhh')}}" method="GET">
                                        <div class="input-group">
                                            <input type="search" name="search" class="form-control">
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
                                    <th>N° Camion</th>

                                    <th class="text-center">Nom</th>
                                    <th class="text-center">Nom type</th>
                                </tr>
                                </thead>
                                <tbody>
                                        @foreach ($TousVoys as $voyages)

                                <tr>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{$voyages->NumCam}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">{{$voyages->Nom}}</td>
                                    <td class="text-center">
                                        <div class="badge badge-warning">{{$voyages->NomType}} </div>
                                    </td>
                                      </div>                                 </td>
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
Top camions par voyages                     </div>
                            
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
Les voyages des types des camions                           </div>
                            
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tab-eg-55">
                                <div class="widget-chart p-3">
                                    <div style="height: 380px">
                                        <canvas id="chart" width="400" height="390"></canvas>

</div></div></div>
<div class="pt-2 card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-numbers fsize-3 text-muted">{{$camPer1}} %</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="text-muted opacity-6">TEREX</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper mt-1">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="{{$camPer1}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$camPer1}}%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-numbers fsize-3 text-muted">{{$camPer2}} %</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="text-muted opacity-6">BULAZ</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper mt-1">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{$camPer2}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$camPer2}}%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-numbers fsize-3 text-muted">{{$camPer3}} %</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="text-muted opacity-6">CAT</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper mt-1">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{$camPer3}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$camPer3}}%;"></div>
                        </div>
                    </div>
                </div>
            
       
       
    </div>
</div>

                   </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
            <div class="row">
                    <div class="col-md-16 col-lg-12">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
      L'origine des voyages                           </div>
                                    
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="tab-eg-55">
                                        <div class="widget-chart p-3">
                                            <div style="height: 550px">
                                                    <canvas id="lineChart" width="600" height="340"></canvas>
        
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
        labels: ['Camion 1','Camion 2','Camion 3','Camion 5','Camion 13',],
        datasets: [{
            label: 'Camions',
            backgroundColor: ['rgb(255, 99, 132)',
            "#FFF333",
            "#FF9F33",
        "#33FF9F",
        "#3386FF"],

            borderColor:[ 'rgb(255, 99, 132)',
            "#FFF333",
            "#FF9F33","white"],
            data: [
                '{{$cam1}}',
                '{{$cam2}}','{{$cam3}}','{{$cam5}}','{{$cam13}}',
                '0'
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
    labels: ['Cat', ' Bulaz', 'Terex'],
    datasets: [{
      label: 'Camions',
      data: [
                '{{$Cat}}',
                '{{$Bulaz}}',
                '{{$Terex}}'             
            ],
      backgroundColor: [
        '#0652B9',
        '#1EC076',
        '#C70039'
      ],
      borderColor: [
        '#0652B9',
        '#1EC076',
        '#C70039'
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
var speedCanvas = document.getElementById("lineChart");



var dataFirst = {
    label: "POIDS KG",
    data: [{{$camP1}},{{$camP2}},{{$camP3}},{{$camP4}},{{$camP5}},{{$camP6}},{{$camP7}},{{$camP8}},{{$camP9}},{{$camP10}},{{$camP11}},{{$camP12}},{{$camP13}}],
    lineTension: 0,
    fill: false,
    borderColor: 'red'
  };

var dataSecond = {
    label: "DISTANCE M",
    data: [{{$camDis1}},{{$camDis2}},{{$camDis3}},{{$camDis4}},{{$camDis5}},{{$camDis6}},{{$camDis7}},{{$camDis8}},{{$camDis9}},{{$camDis10}},{{$camDis11}},{{$camDis12}},{{$camDis13}}],
    lineTension: 0,
    fill: false,
  borderColor: 'blue'
  };

var speedData = {
  labels: ["camion 1", "camion 2", "camion 3", "camion 4", "camion 5", "camion 6", "camion 7", "camion 8", "camion 9", "camion 10", "camion 11", "camion 12", "camion 13"],
  datasets: [dataFirst, dataSecond]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});
</script>


</div>
</div>
      
@endsection

@extends('layouts.app')

@section('content')
</div></br></br><div class="app-main">
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
    </div><div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-chart-bar">
                            </i>
                        </div>
                        <div>Arrèts Dashboard
                            <div class="page-title-subheading">C'est un tableau de bord de la production minière.
                            </div>
                        </div>
                    </div>
                     </div>
            </div>            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-primary">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Nombre des arrets des camions </div>
                                <div class="widget-subheading"></div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>
                                    {{$nombreArrets}}
                                </span></div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Les arrêts d'aujourd'hui</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span> {{$DateAr}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-warning">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Les types des arrèts</div>
                                <div class="widget-subheading"></div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$arrets}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-premium-dark">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Products Sold</div>
                                <div class="widget-subheading">Revenue streams</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>$14M</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-9 card">
                        <div class="card-header">Les arrêts des camions
                            <div class="btn-actions-pane-right" >
                                    <form action="{{route('searchhhh')}}" method="GET">
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
                                    <th class="text-center">N° Camion</th>
                                    <th>N° poste</th>

                                    <th class="text-center">Type d'arrêt</th>
                                    <th class="text-center">Date</th>

                                    
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Tousarrets as $lesarrets)


                                <tr>
                                    <td class="text-center text-muted">{{$lesarrets->Num_Cam}} </td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{$lesarrets->Num_Poste}}</div>
                                                   
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">@if ($lesarrets->Code_Ar === 1)
                                                            Arrêt mécanique
                                                        @elseif ($lesarrets->Code_Ar == 2)
                                                        Arrêt éléctrique

                                                        @else
                                                            ----
                                                        @endif    </div>
                                                       
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">{{$lesarrets->Date}}</div>
                                                       
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    
                                </tr>@endforeach
                                

                                </tbody>
                            </table>
                        </div>
                        <div class="d-block text-center card-footer">
                                                          
                            
                                
                        </div>
                    </div>
                </div>
            </div></br>
            <div class="row">
                    <div class="col-md-14 col-lg-12">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
        Le pourcentage des arrêts des camions dans les postes                           </div>
                                    
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="tab-eg-55">
                                        <div class="widget-chart p-3">
                                            <div style="height: 350px">
                                                <canvas id="chart" width="500" height="400"></canvas>
        
        </div>
                                        </div></div></br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                <div class="widget-numbers fsize-3 text-muted">{{$arretPer1}}%</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">P1 : du 07h à 15h</div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{$arretPer1}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$arretPer1}}%;"></div>
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
                                                                    <div class="widget-numbers fsize-3 text-muted">{{$arretPer2}}%</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">P2 : du 15h à 23h</div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-grow-early" role="progressbar" aria-valuenow="{{$arretPer2}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$arretPer2}}%;"></div>
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
                                                                    <div class="widget-numbers fsize-3 text-muted">{{$arretPer3}}%</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">P3 : du 23h à 07h</div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{$arretPer3}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$arretPer3}}%;"></div>
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

                        <div class="col-md-18 col-lg-12">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
       Nombre des arrêts pour chaque camion                           </div>
                                    
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
                        </div></div>
                        <div class="row">
                <div class="col-md-16 col-lg-12">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header-tab-animation card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                Nombre des arrêts pour chaque type d'arrêt                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">


                                     
                                     

                                            <div style="height: 350px">    <canvas id="myChart" width="500" height="190"></canvas>
                                            </div>

                                        
                                     
                                     
                                     
                                     
                                    
                                    </div>
                                    <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Nombre des arrêts pour chaque type</h6>
                                    
                                            
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">arrêt mécanique</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                <span>{{$ar1}}</span>
                                                                <small class="text-success pl-2">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">arrêt électrique</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <span>{{$ar2}}</span>
                                                                    <small class="text-success pl-2">
                                                                        <i class="fa fa-angle-up"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
                
            </div>
          
      
        </div>
          </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
      var canvas = document.getElementById("myChart");
var ctx = canvas.getContext('2d');

// Global Options:




// Data with datasets options
var data = {
    labels: ["arrêt mécanique", "arrêt électrique"],
      datasets: [
        {
            label: "les arrêts",
            fill: true,
            backgroundColor: [
                'dodgerblue',
                
                'lightpink'],
            data: [{{$ar1}},{{$ar2}}]
        }
    ]
};

// Notice how nested the beginAtZero is
var options = {
        title: {
                  display: true,
                  text: 'les types arrêts',
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
    
    var ctx = document.getElementById("chart");
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ['Poste 1', 'Poste 2', 'Poste 3'],
    datasets: [{
      label: 'Les arrets',
      data: [
                '{{$arretPer1}}',
               
                '{{$arretPer2}}',
                '{{$arretPer3}}'
                
            ],
      backgroundColor: [
        '#0652B9',
        '#1EC076',

        '#EBD003'
      ],
      borderColor: [
        '#0652B9',
        '#1EC076',
       
        '#EBD003'
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
    var ctx = document.getElementById("lineChart").getContext('2d');


var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Camion N°1",	"Camion N°2",	"Camion N°3",	"Camion N°4",	"Camion N°5",	"Camion N°6",	"Camion N°7","Camion N°8",	"Camion N°9","Camion N°10","Camion N°11","Camion N°12","Camion N°13"],
        datasets: [{
            label: 'Nombre des arrêts', // Name the series
            data: [{{$camAr1}},{{$camAr2}},{{$camAr3}},{{$camAr4}},{{$camAr5}},{{$camAr6}},{{$camAr7}},{{$camAr8}},{{$camAr9}},{{$camAr10}},{{$camAr11}},{{$camAr12}},{{$camAr13}}], // Specify the data values array
            fill: true,
            borderColor: '#1EC076', // Add custom color border (Line)
            backgroundColor: '#1EC076', // Add custom color background (Points and Fill)
            borderWidth: 1 // Specify bar border width
        }]},
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
});
    </script>
</div>
</div>
      
@endsection

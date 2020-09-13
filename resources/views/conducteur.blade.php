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
                                <div class="widget-heading">Nombre de Conducteurs </div>
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
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Nombre de Voyages   </div>
                                <div class="widget-subheading"></div>
                            </div>
                            <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>{{$vb}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
               
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-9 card">
                        <div class="card-header">Les Conducteurs
                            <div class="btn-actions-pane-right" >
                                    <form action="{{route('searchh')}}" method="GET">
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
                                    <th class="text-center">Matricule</th>
                                    <th>Nom</th>

                                    <th class="text-center">Prénom</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                        @foreach ($TousCond as $Conducteurs)

                                <tr>
                                    <td class="text-center text-muted">{{$Conducteurs->Matricule}} </td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{$Conducteurs->Nom}}</div>
                                                   
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
                                                        <div class="widget-heading">{{$Conducteurs->Prenom}}</div>
                                                       
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    
                                </tr>@endforeach
                                

                                </tbody>
                            </table>
                        </div>
                        <div class="d-block text-center card-footer">
                                                           {{ $CondPag->links() }}
                                
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
TOP 5 Conducteurs par total des distances                   </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                        <div class="card-body" style="height: 415px" >
                                            <canvas id="barChart" width="400" height="270"></canvas>
                                        </div>
                                      </div>                                  
                                      <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Nombre de Voyages</h6>
                                      <div class="scroll-area-sm">
                                          <div class="scrollbar-container">
                                              <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                  <li class="list-group-item">
                                                      <div class="widget-content p-0">
                                                          <div class="widget-content-wrapper">
                                                              <div class="widget-content-left mr-3">
                                                                  <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                              </div>
                                                              <div class="widget-content-left">
                                                                  <div class="widget-heading">Mazraoui Noussair</div>
                                                              </div>
                                                              <div class="widget-content-right">
                                                                  <div class="font-size-xlg text-muted">
                                                                  <span>{{$cond1}} voyages</span>
                                                                      
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                      <div class="widget-content p-0">
                                                          <div class="widget-content-wrapper">
                                                              <div class="widget-content-left mr-3">
                                                                  <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                              </div>
                                                              <div class="widget-content-left">
                                                                  <div class="widget-heading">Barik Ahmed</div>
                                                              </div>
                                                              <div class="widget-content-right">
                                                                  <div class="font-size-xlg text-muted">
                                                                      <span>{{$cond2}} voyages</span>
                                                                      
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                      <div class="widget-content p-0">
                                                          <div class="widget-content-wrapper">
                                                              <div class="widget-content-left mr-3">
                                                                  <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                              </div>
                                                              <div class="widget-content-left">
                                                                  <div class="widget-heading">Boutabaa Houssain</div>
                                                              </div>
                                                              <div class="widget-content-right">
                                                                  <div class="font-size-xlg text-muted">
                                                                      <span>{{$cond3}} voyages</span>
                                                                      
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                      <div class="widget-content p-0">
                                                          <div class="widget-content-wrapper">
                                                              <div class="widget-content-left mr-3">
                                                                  <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                              </div>
                                                              <div class="widget-content-left">
                                                                  <div class="widget-heading">Azergui Ali salem</div>
                                                              </div>
                                                              <div class="widget-content-right">
                                                                  <div class="font-size-xlg text-muted">
                                                                      <span>{{$cond4}} voyages</span>
                                                                      
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li class="list-group-item">
                                                      <div class="widget-content p-0">
                                                          <div class="widget-content-wrapper">
                                                              <div class="widget-content-left mr-3">
                                                                  <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                              </div>
                                                              <div class="widget-content-left">
                                                                  <div class="widget-heading">Barikalah salama</div>
                                                              </div>
                                                              <div class="widget-content-right">
                                                                  <div class="font-size-xlg text-muted">
                                                                      <span>{{$cond5}} voyages</span>
                                                                      
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                              </ul>
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
Le pourcentage de voyages pour chaque conducteur                         </div>
                      </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tab-eg-55">
                                <div class="widget-chart p-3">
                                    <div style="height: 380px">
                                        <canvas id="chart" width="400" height="390"></canvas>

</div>
                                    
                                </div>
                                <div class="pt-2 card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-numbers fsize-3 text-muted">{{$condPer1}} %</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Mazraoui</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="{{$condPer1}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$condPer1}}%;"></div>
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
                                                            <div class="widget-numbers fsize-3 text-muted">{{$condPer2}} %</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Barik</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{$condPer2}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$condPer2}}%;"></div>
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
                                                            <div class="widget-numbers fsize-3 text-muted">{{$condPer3}} %</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Boutabaa</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{$condPer3}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$condPer3}}%;"></div>
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
                                                            <div class="widget-numbers fsize-3 text-muted">{{$condPer4}} %</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Azergui</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{$condPer4}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$condPer4}}%;"></div>
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
                                                            <div class="widget-numbers fsize-3 text-muted">{{$condPer5}} %</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Barikalah</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="{{$condPer5}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$condPer5}}%;"></div>
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
            </div>
                       
            <div class="row">
                    <div class="col-md-15 col-lg-11">
                            <div class="mb-10 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
      Les conducteurs et les camions                           </div>
                                    
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="tab-eg-55">
                                        <div class="widget-chart p-3">
                                            <div style="height: 280px">
                                                    <canvas id="barCharts" width="620" height="270"></canvas>
        
        </div>
                                            
                                        </div>
                                        
                                    </div></br></br></br></br></br></br>
                                </div>
                            </div>
                        </div>
                  
                
                </div>  
          </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
   
<script>
     var ctx = document.getElementById("chart");
var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Conducteur N°1', 'Conducteur N°2', 'Conducteur N°3', 'Conducteur N°4', 'Conducteur N°5'],
    datasets: [{
      label: 'Camions',
      data: [
                '{{$condPer1}}',
                '{{$condPer2}}',
                '{{$condPer3}}',
                '{{$condPer4}}',
                '{{$condPer5}}'
                
            ],
      backgroundColor: [
        '#C70039',
        '#1EC076',
        '#0652B9',
        '#E7CB06',
        'grey'
      ],
      borderColor: [
        '#C70039',
        '#1EC076',
        '#0652B9',
        '#E7CB06',
        'grey'
      ],
      borderWidth: 1
    }]
  },
  options: {
   	cutoutPercentage: 50,
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
    labels: ["Mazraoui", "Barik","Boutabaa", "Azergui","Barikalah"],
      datasets: [
        {
            label: "Distance",
            fill: true,
            backgroundColor: [
                'moccasin','green','dodgerblue','orange','lightpink'],
            data: [{{$condDis1}},{{$condDis2}},{{$condDis3}},{{$condDis4}},{{$condDis5}}]
        }
    ]
};

// Notice how nested the beginAtZero is
var options = {
        title: {
                  display: true,
                  text: 'Conducteurs',
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
var ctx = document.getElementById("barCharts").getContext('2d');
var barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Azergui", "Barik", "Barikalah", "Boutabaa", "Mazraoui"],
    datasets: [{
      label: 'CAT',
      data: [{{$condCat1}},{{$condCat2}},{{$condCat3}},{{$condCat4}},{{$condCat5}}],
      backgroundColor: "#D6CA02"
    }, {
      label: 'BULAZ',
      data: [{{$condBulaz1}},{{$condBulaz2}},{{$condBulaz3}},{{$condBulaz4}},{{$condBulaz5}}],
      backgroundColor: "#D6026F"
    },
    {
      label: 'Terex',
      data: [{{$condTerex1}},{{$condTerex2}},{{$condTerex3}},{{$condTerex4}},{{$condTerex5}}],
      backgroundColor: "#02D6C3"
    }
    
    ]
  }
});
</script>

</div>
</div>
      
@endsection

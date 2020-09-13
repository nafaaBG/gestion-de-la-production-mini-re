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
    </div> <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-chart-bar">
                            </i>
                        </div>
                        <div>Qualités Dashboard
                            <div class="page-title-subheading">C'est un tableau de bord de la production minière.
                            </div>
                        </div>
                    </div>
         </div>
            </div>         
            <div class="row">
                <div class="col-md-16 col-lg-12">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header-tab-animation card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                Nombre de voyage pour les qualités                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">


                                     
                                     

                                            <div style="height: 350px">    <canvas id="myChart" width="500" height="190"></canvas>
                                            </div>

                                        
                                     
                                     
                                     
                                     
                                    
                                    </div>
                                    <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Nombre des voyages par qualité</h6>
                                    
                                            
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Phosphate</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                <span>{{$Qualitetyp1}}</span>
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
                                                                <div class="widget-heading">Stérile</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <span>{{$Qualitetyp2}}</span>
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
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
        var canvas = document.getElementById("myChart");
  var ctx = canvas.getContext('2d');
  
  // Global Options:
  
  
  
  
  // Data with datasets options
  var data = {
      labels: ["Phosphate", "Stérile"],
        datasets: [
          {
              label: "les qualités",
              fill: true,
              backgroundColor: [
                  'dodgerblue',
                  
                  'lightpink'],
              data: [{{$Qualitetyp1}},{{$Qualitetyp2}}]
          }
      ]
  };
  
  // Notice how nested the beginAtZero is
  var options = {
          title: {
                    display: true,
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
    
</div>
</div>
      
@endsection

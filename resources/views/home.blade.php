@extends('layouts.app')

@section('content')
</div></br></br> <div class="app-main">
    <div class="app-sidebar sidebar-shadow">
       
          <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                <ul  class="vertical-nav-menu">
                    
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
                   
                        </div></div>
            </div>            
            
            

                        


                <div class="slideshow-container" style="width:80%">
                  <div class="mySlides1">
                  <img src="{{asset('assets/img/1slider_0.png')}}" style="width:100%">
                  </div>
                
                  <div class="mySlides1">
                    <img src="{{asset('assets/img/2slider.png')}}" style="width:100%">
                  </div>
                
                  <div class="mySlides1">
                    <img src="{{asset('assets/img/3slider.png')}}" style="width:100%">
                  </div>
                
                  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
                </div>
            </br></br><div class="mb-9 card">
            
            
            
            
            
            <div class="row">
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
                                <div class="widget-heading">Conducteurs</div>
                                <div class="widget-subheading">Total Conducteurs</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$users}}</span></div>
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
                                <div class="widget-numbers text-white"><span> {{$kk}}
</span></div>
                            </div>
                        </div>
                    </div>
                </div></br></br>
               
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header-tab-animation card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
Top Voyages                            </div>
                            
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tab-eg-55">
                                <div class="widget-chart p-5">
                                    <div style="height: 350px">

                                     

                                     
                                            <canvas id="myChart"></canvas>
                                            

                                     
                                     
                                     
                                     
                                    
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
Top des camions par la distance                            </div>
                            
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tab-eg-55">
                                <div class="widget-chart p-5">
                                    <div style="height: 350px">
                                        <canvas id="chart" width="350" height="390"></canvas>

</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-12 col-lg-13">
                    <div class="mb-6 card">
                        <div class="card-header-tab card-header-tab-animation card-header">
                    <div class="card-header-title">
                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                        La performance des camions
                               </div>
                    
                </div></div>
            
            <div class="mb-3 card">
            </br>
            <div id="columnchart_material" style="width: 800px; height: 500px;margin-left:30px"></div>
            </div></div></div></div></div>
            
                        


        
          


<script>
    var slideIndex = [1,1];
    var slideId = ["mySlides1", "mySlides2"]
    showSlides(1, 0);
    showSlides(1, 1);
    
    function plusSlides(n, no) {
      showSlides(slideIndex[no] += n, no);
    }
    
    function showSlides(n, no) {
      var i;
      var x = document.getElementsByClassName(slideId[no]);
      if (n > x.length) {slideIndex[no] = 1}    
      if (n < 1) {slideIndex[no] = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      x[slideIndex[no]-1].style.display = "block";  
    }
    </script>
   
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['VOY 1', 'VOY 2', 'VOY 3',''],
        datasets: [{
            label: 'Poids KG ',
            backgroundColor: ['rgb(255, 99, 132)',
            "#DC143C",
            "green",
        "white"],

            borderColor:[ 'rgb(255, 99, 132)',
            "#DC143C",
            "green","white"],
            data: [
                '{{$voy1}}',
                '{{$voy2}}',
                '{{$voy3}}',
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
  type: 'doughnut',
  data: {
    labels: ['Camion N°1', 'Camion N°2', 'Camion N°3'],
    datasets: [{
      label: 'Camions',
      data: [
                '{{$cam1}}',
                '{{$cam2}}',
                '{{$cam3}}'
                
            ],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
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

<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['', 'Poids KG','Distance M'],
        ['Terex', '{{$poids1}}', '{{$typ1}}'],
        ['Cat', '{{$poids3}}', '{{$typ3}}'],
        ['Bulaz','{{$poids2}}' , '{{$typ2}}']
      ]);

      var options = {
        chart: {
          
        }
      };

      var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

      chart.draw(data, google.charts.Bar.convertOptions(options));
    }
  </script>
  
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


</div>
</div>
      
@endsection

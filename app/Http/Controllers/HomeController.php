<?php


namespace App\Http\Controllers;

use App\Voyages;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $cam1 = DB::table('voyages')->where('Num_Cam',1)->sum('Distance');
        $cam2 = DB::table('voyages')->where('Num_Cam',2)->sum('Distance');
        $cam3 = DB::table('voyages')->where('Num_Cam',3)->sum('Distance');

        $typ1 = DB::table('voyages')
            ->join('camions', 'voyages.Num_Cam', '=', 'camions.NumCam')
            ->select('voyages.Distance')
            ->where('camions.Code_Type',1)
            ->sum('voyages.Distance');
            $typ2 = DB::table('voyages')
            ->join('camions', 'voyages.Num_Cam', '=', 'camions.NumCam')
            ->select('voyages.Distance')
            ->where('camions.Code_Type',2)
            ->sum('voyages.Distance');
            $typ3 = DB::table('voyages')
            ->join('camions', 'voyages.Num_Cam', '=', 'camions.NumCam')
            ->select('voyages.Distance')
            ->where('camions.Code_Type',3)
            ->sum('voyages.Distance');

            $poids1 = DB::table('voyages')
            ->join('camions', 'voyages.Num_Cam', '=', 'camions.NumCam')
            ->select('voyages.Distance')
            ->where('camions.Code_Type',1)
            ->sum('voyages.Poids');
            $poids2 = DB::table('voyages')
            ->join('camions', 'voyages.Num_Cam', '=', 'camions.NumCam')
            ->select('voyages.Distance')
            ->where('camions.Code_Type',2)
            ->sum('voyages.Poids');
            $poids3 = DB::table('voyages')
            ->join('camions', 'voyages.Num_Cam', '=', 'camions.NumCam')
            ->select('voyages.Distance')
            ->where('camions.Code_Type',3)
            ->sum('voyages.Poids');    
        
            $voy1 = Voyages::where('NumVoy',1)->sum('Poids');
            $voy3 = Voyages::where('NumVoy',4)->sum('Poids');
            $voy2 = Voyages::where('NumVoy',5)->sum('Poids');
        $users = DB::table('conducteurs')->count();
		$vv = DB::table('voyages')->count();
        $kk = DB::table('camions')->count();
        

        return view('home')->with(['users'=>$users,'vv'=>$vv,'kk'=>$kk,'voy1'=>$voy1,'voy2'=>$voy2,'voy3'=>$voy3,'cam1'=>$cam1,'cam2'=>$cam2,'cam3'=>$cam3,'typ1'=>$typ1,'typ2'=>$typ2,'typ3'=>$typ3,'poids1'=>$poids1,'poids2'=>$poids2,'poids3'=>$poids3  ]);

    }
    
    public function indexQ()
    {
        $cam1 = DB::table('voyages')->where('Num_Cam',1)->sum('Distance');
        $cam2 = DB::table('voyages')->where('Num_Cam',2)->sum('Distance');
        $cam3 = DB::table('voyages')->where('Num_Cam',3)->sum('Distance');

        
        $voy1 = Voyages::where('NumVoy',1)->sum('Poids');
        $voy2 = Voyages::where('NumVoy',2)->sum('Poids');
        $voy3 = Voyages::where('NumVoy',3)->sum('Poids');
        $users = DB::table('conducteurs')->count();
		$vv = DB::table('voyages')->count();
        $kk = DB::table('camions')->count();
        

        return view('qualite')->with(['users'=>$users,'vv'=>$vv,'kk'=>$kk,'voy1'=>$voy1,'voy2'=>$voy2,'voy3'=>$voy3,'cam1'=>$cam1,'cam2'=>$cam2,'cam3'=>$cam3 ]);

    }
    public function indexA()
    {
        $cam1 = DB::table('voyages')->where('Num_Cam',1)->sum('Distance');
        $cam2 = DB::table('voyages')->where('Num_Cam',2)->sum('Distance');
        $cam3 = DB::table('voyages')->where('Num_Cam',3)->sum('Distance');

        
        $voy1 = Voyages::where('NumVoy',1)->sum('Poids');
        $voy2 = Voyages::where('NumVoy',2)->sum('Poids');
        $voy3 = Voyages::where('NumVoy',3)->sum('Poids');
        $users = DB::table('conducteurs')->count();
		$vv = DB::table('voyages')->count();
        $kk = DB::table('camions')->count();
        

        return view('arret')->with(['users'=>$users,'vv'=>$vv,'kk'=>$kk,'voy1'=>$voy1,'voy2'=>$voy2,'voy3'=>$voy3,'cam1'=>$cam1,'cam2'=>$cam2,'cam3'=>$cam3 ]);

    }
    
    
}

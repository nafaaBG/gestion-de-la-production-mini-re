<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voyages;
use Illuminate\Support\Facades\DB;


class voyageController extends Controller
{
    public function index()
    {
       

        $cam1 = DB::table('voyages')->where('Num_Cam',1)->sum('Distance');
        $cam2 = DB::table('voyages')->where('Num_Cam',2)->sum('Distance');
        $cam3 = DB::table('voyages')->where('Num_Cam',3)->sum('Distance');

        
        $voy1 = Voyages::where('NumVoy',1)->sum('Poids');
        $voy3 = Voyages::where('NumVoy',2)->sum('Poids');
        $voy2 = Voyages::where('NumVoy',4)->sum('Poids');
		$vv = DB::table('voyages')->count();
        

        return view('voyage')->with(['vv'=>$vv,'voy1'=>$voy1,'voy2'=>$voy2,'voy3'=>$voy3,'cam1'=>$cam1,'cam2'=>$cam2,'cam3'=>$cam3 ]);

    }
    //
    public function search(Request $request)
    {
        $todayDate = date("Y-m-d");

        $DateVoy = DB::table('voyages')->whereDay('Date_Debut', '=', date('d'))
        ->whereMonth('Date_Debut', '=', date('m'))
        ->whereYear('Date_Debut', '=', date('Y'))
        ->count();

        $P1 = DB::table('voyages')->where('Num_Poste',1)->count();
        $P2 = DB::table('voyages')->where('Num_Poste',2)->count();
        $P3 = DB::table('voyages')->where('Num_Poste',3)->count();


        $TousVoy = DB::table('voyages')->simplePaginate(10);
        $cam1 = DB::table('voyages')->where('NumVoy',2)->sum('Distance');
        $cam2 = DB::table('voyages')->where('NumVoy',5)->sum('Distance');
        $cam3 = DB::table('voyages')->where('NumVoy',3)->sum('Distance');
        $cam4= DB::table('voyages')->where('NumVoy',1)->sum('Distance');
        $cam5 = DB::table('voyages')->where('NumVoy',4)->sum('Distance');


        
        $voy1 = Voyages::where('NumVoy',1)->sum('Poids');
        $voy3 = Voyages::where('NumVoy',4)->sum('Poids');
        $voy2 = Voyages::where('NumVoy',5)->sum('Poids');
        $voy4 = Voyages::where('NumVoy',2)->sum('Poids');
        $voy5 = Voyages::where('NumVoy',7)->sum('Poids');


        $voya1 = Voyages::where('NumVoy',1)->sum('Distance');
        $voya2 = Voyages::where('NumVoy',2)->sum('Distance');
        $voya3 = Voyages::where('NumVoy',3)->sum('Distance');      
        $voya4 = Voyages::where('NumVoy',4)->sum('Distance');
        $voya5 = Voyages::where('NumVoy',5)->sum('Distance');
        $voya6 = Voyages::where('NumVoy',6)->sum('Distance');
        $voya7 = Voyages::where('NumVoy',7)->sum('Distance');
        $voya8 = Voyages::where('NumVoy',8)->sum('Distance');
        $voya9 = Voyages::where('NumVoy',9)->sum('Distance');
        $voya10 = Voyages::where('NumVoy',10)->sum('Distance');



        $vv = DB::table('voyages')->count();

        $sc1=DB::table('voyages')->where('Code_Sc','1')->count();
        $sc2=DB::table('voyages')->where('Code_Sc','2')->count();

        
        $search = $request->get('search');
        $TousVoys = Voyages::limit(10)->where('Date_Debut','like','%'.$search.'%')->orderBy('NumVoy', 'DESC')
        ->get();
        return view('voyage',['TousVoys'=>$TousVoys,'TousVoy'=>$TousVoy,'DateVoy'=>$DateVoy,
        'vv'=>$vv,
        'voy1'=>$voya1,'voya2'=>$voya2,'voya3'=>$voya3,'voya4'=>$voya4,'voya5'=>$voya5,'voya6'=>$voya6,'voya7'=>$voya7,'voya8'=>$voya8,'voya9'=>$voya9,'voya10'=>$voya10,
        'cam1'=>$cam1,'cam2'=>$cam2,'cam3'=>$cam3,'cam4'=>$cam4,'cam5'=>$cam5,
        'sc1'=>$sc1,'sc2'=>$sc2,
        'P1'=>$P1,'P2'=>$P2,'P3'=>$P3,
        'voy1'=>$voy1,'voy2'=>$voy2,'voy3'=>$voy3,'voy4'=>$voy4,'voy5'=>$voy5
        ]);
    }
    
}

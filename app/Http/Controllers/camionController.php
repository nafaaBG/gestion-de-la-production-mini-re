<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\camions;
use App\Voyages;
use Illuminate\Support\Facades\DB;

class camionController extends Controller
{
    //
    public function indexC()
    {
   }
    //
    public function searchhh(Request $request)
    {
        $todayDate = date("Y-m-d");

        $DateVoy = DB::table('voyages')->whereDay('Date_Debut', '=', date('d'))
        ->whereMonth('Date_Debut', '=', date('m'))
        ->whereYear('Date_Debut', '=', date('Y'))
        ->count();

        


        $TousVoy = DB::table('voyages')->simplePaginate(10);
        $cam1 = DB::table('voyages')->where('Num_Cam',1)->count();
        $cam2 = DB::table('voyages')->where('Num_Cam',2)->count();
        $cam3 = DB::table('voyages')->where('Num_Cam',3)->count();
        $cam5= DB::table('voyages')->where('Num_Cam',5)->count();
        $cam13 = DB::table('voyages')->where('Num_Cam',13)->count();


        
        $voy1 = Voyages::where('NumVoy',1)->sum('Poids');
        $voy3 = Voyages::where('NumVoy',4)->sum('Poids');
        $voy2 = Voyages::where('NumVoy',5)->sum('Poids');
        $voy4 = Voyages::where('NumVoy',2)->sum('Poids');
        $voy5 = Voyages::where('NumVoy',7)->sum('Poids');

       

        $camDis1 = Voyages::where('Num_Cam',1)->sum('Distance');
        $camDis2 = Voyages::where('Num_Cam',2)->sum('Distance');
        $camDis3 = Voyages::where('Num_Cam',3)->sum('Distance');      
        $camDis4 = Voyages::where('Num_Cam',4)->sum('Distance');
        $camDis5 = Voyages::where('Num_Cam',5)->sum('Distance');
        $camDis6 = Voyages::where('Num_Cam',6)->sum('Distance');
        $camDis7 = Voyages::where('Num_Cam',7)->sum('Distance');
        $camDis8 = Voyages::where('Num_Cam',8)->sum('Distance');
        $camDis9 = Voyages::where('Num_Cam',9)->sum('Distance');
        $camDis10 = Voyages::where('Num_Cam',10)->sum('Distance');
        $camDis11 = Voyages::where('Num_Cam',11)->sum('Distance');
        $camDis12 = Voyages::where('Num_Cam',12)->sum('Distance');
        $camDis13 = Voyages::where('Num_Cam',13)->sum('Distance');

        $camP1 = Voyages::where('Num_Cam',1)->sum('Poids');
        $camP2 = Voyages::where('Num_Cam',2)->sum('Poids');
        $camP3 = Voyages::where('Num_Cam',3)->sum('Poids');      
        $camP4 = Voyages::where('Num_Cam',4)->sum('Poids');
        $camP5 = Voyages::where('Num_Cam',5)->sum('Poids');
        $camP6 = Voyages::where('Num_Cam',6)->sum('Poids');
        $camP7 = Voyages::where('Num_Cam',7)->sum('Poids');
        $camP8 = Voyages::where('Num_Cam',8)->sum('Poids');
        $camP9 = Voyages::where('Num_Cam',9)->sum('Poids');
        $camP10 = Voyages::where('Num_Cam',10)->sum('Poids');
        $camP11 = Voyages::where('Num_Cam',11)->sum('Poids');
        $camP12 = Voyages::where('Num_Cam',12)->sum('Poids');
        $camP13 = Voyages::where('Num_Cam',13)->sum('Poids');

        $Terex = DB::table('voyages')
        ->join('camions', 'voyages.Num_Cam', '=', 'camions.NumCam')
        ->select('voyages.Num_Cam')
        ->where('camions.Code_Type',1)
        ->count();
        $Bulaz = DB::table('voyages')
        ->join('camions', 'voyages.Num_Cam', '=', 'camions.NumCam')
        ->select('voyages.Num_Cam')
        ->where('camions.Code_Type',2)
        ->count();
        $Cat = DB::table('voyages')
        ->join('camions', 'voyages.Num_Cam', '=', 'camions.NumCam')
        ->select('voyages.Num_Cam')
        ->where('camions.Code_Type',3)
        ->count();
       



        $vv = DB::table('voyages')->count();


        $sc1=DB::table('voyages')->where('Code_Sc','1')->count();
        $sc2=DB::table('voyages')->where('Code_Sc','2')->count();
        $vc = DB::table('camions')->count();

        $camPer1=number_format(($Terex*100)/$vv, 2, '.', '');
        $camPer2=number_format(($Bulaz*100)/$vv, 2, '.', '');
        $camPer3=number_format(($Cat*100)/$vv, 2, '.', '');
       

        
        $search = $request->get('search');
        $TousVoys = camions::limit(5)->join('types', 'camions.Code_Type', '=', 'types.CodeType')
        ->where('NomType','like','%'.$search.'%')
        ->orWhere('Nom','like','%'.$search.'%')
        ->orderBy('NumCam')
        ->get();
        return view('camion',['TousVoys'=>$TousVoys,'TousVoy'=>$TousVoy,'DateVoy'=>$DateVoy,
        'vv'=>$vv,'vc'=>$vc,
        'camDis1'=>$camDis1,'camDis2'=>$camDis2,'camDis3'=>$camDis3,'camDis4'=>$camDis4,'camDis5'=>$camDis5,'camDis6'=>$camDis6,'camDis7'=>$camDis7,'camDis8'=>$camDis8,'camDis9'=>$camDis9,'camDis10'=>$camDis10,'camDis11'=>$camDis11,'camDis12'=>$camDis12,'camDis13'=>$camDis13,
        'camP1'=>$camP1,'camP2'=>$camP2,'camP3'=>$camP3,'camP4'=>$camP4,'camP5'=>$camP5,'camP6'=>$camP6,'camP7'=>$camP7,'camP8'=>$camP8,'camP9'=>$camP9,'camP10'=>$camP10,'camP11'=>$camP11,'camP12'=>$camP12,'camP13'=>$camP13,
        'cam1'=>$cam1,'cam2'=>$cam2,'cam3'=>$cam3,'cam5'=>$cam5,'cam13'=>$cam13,
        'sc1'=>$sc1,'sc2'=>$sc2,
        'Bulaz'=>$Bulaz,'Terex'=>$Terex,'Cat'=>$Cat,
        'camPer1'=>$camPer1,'camPer2'=>$camPer2,'camPer3'=>$camPer3,
        'voy1'=>$voy1,'voy2'=>$voy2,'voy3'=>$voy3,'voy4'=>$voy4,'voy5'=>$voy5
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Conducteurs;
use Illuminate\Http\Request;
use App\Voyages;
use Illuminate\Support\Facades\DB;
class conducteurController extends Controller
{
    public function index()
    {
   }
    //
    public function searchh(Request $request)
    {

        $CondPag = DB::table('voyages')->simplePaginate(5);
        $cond1 = DB::table('voyages')->where('Matricule',1)->count();
        $cond2 = DB::table('voyages')->where('Matricule',2)->count();
        $cond3 = DB::table('voyages')->where('Matricule',3)->count();
        $cond4= DB::table('voyages')->where('Matricule',4)->count();
        $cond5 = DB::table('voyages')->where('Matricule',5)->count();
      
        $condDis2 = Voyages::where('Matricule',2)->sum('Distance');
        $condDis1 = Voyages::where('Matricule',1)->sum('Distance');
        $condDis3 = Voyages::where('Matricule',3)->sum('Distance');      
        $condDis4 = Voyages::where('Matricule',4)->sum('Distance');
        $condDis5 = Voyages::where('Matricule',5)->sum('Distance');


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

        $vv = DB::table('conducteurs')->count();
        $vb = DB::table('voyages')->count();
        
        $condPer1=number_format(($cond1*100)/$vb, 2, '.', '');
        $condPer2=number_format(($cond2*100)/$vb, 2, '.', '');
        $condPer3=number_format(($cond3*100)/$vb, 2, '.', '');
        $condPer4=number_format(($cond4*100)/$vb, 2, '.', '');
        $condPer5=number_format(($cond5*100)/$vb, 2, '.', '');


        $sc1=DB::table('voyages')->where('Code_Sc','1')->count();
        $sc2=DB::table('voyages')->where('Code_Sc','2')->count();

        $condCat1=DB::table('voyages')->where('Matricule',1)->where('Num_Cam',3)->count();
        $condCat2=DB::table('voyages')->where('Matricule',2)->where('Num_Cam',3)->count();
        $condCat3=DB::table('voyages')->where('Matricule',3)->where('Num_Cam',3)->count();
        $condCat4=DB::table('voyages')->where('Matricule',4)->where('Num_Cam',3)->count();
        $condCat5=DB::table('voyages')->where('Matricule',5)->where('Num_Cam',3)->count();

        $condTerex1=DB::table('voyages')->where('Matricule',1)->where('Num_Cam',1)->count();
        $condTerex2=DB::table('voyages')->where('Matricule',2)->where('Num_Cam',1)->count();
        $condTerex3=DB::table('voyages')->where('Matricule',3)->where('Num_Cam',1)->count();
        $condTerex4=DB::table('voyages')->where('Matricule',4)->where('Num_Cam',1)->count();
        $condTerex5=DB::table('voyages')->where('Matricule',5)->where('Num_Cam',1)->count();

        $condBulaz1=DB::table('voyages')->where('Matricule',1)->where('Num_Cam',2)->count();
        $condBulaz2=DB::table('voyages')->where('Matricule',2)->where('Num_Cam',2)->count();
        $condBulaz3=DB::table('voyages')->where('Matricule',3)->where('Num_Cam',2)->count();
        $condBulaz4=DB::table('voyages')->where('Matricule',4)->where('Num_Cam',2)->count();
        $condBulaz5=DB::table('voyages')->where('Matricule',5)->where('Num_Cam',2)->count();

        
        $search = $request->get('search');
        $TousCond = Conducteurs::limit(5)->where('Nom','like','%'.$search.'%')->orWhere('Prenom','like','%'.$search.'%')->orderBy('Nom')->get();
        return view('conducteur',['TousCond'=>$TousCond,'CondPag'=>$CondPag,
        'vv'=>$vv,'vb'=>$vb,
        'condPer1'=>$condPer1,'condPer2'=>$condPer2,'condPer3'=>$condPer3,'condPer4'=>$condPer4,'condPer5'=>$condPer5,
        'voy1'=>$voya1,'voya2'=>$voya2,'voya3'=>$voya3,'voya4'=>$voya4,'voya5'=>$voya5,'voya6'=>$voya6,'voya7'=>$voya7,'voya8'=>$voya8,'voya9'=>$voya9,'voya10'=>$voya10,
        'cond1'=>$cond1,'cond2'=>$cond2,'cond3'=>$cond3,'cond4'=>$cond4,'cond5'=>$cond5,
        'condDis1'=>$condDis1,'condDis2'=>$condDis2,'condDis3'=>$condDis3,'condDis4'=>$condDis4,'condDis5'=>$condDis5,
        'condCat1'=>$condCat1,'condCat2'=>$condCat2,'condCat3'=>$condCat3,'condCat4'=>$condCat4,'condCat5'=>$condCat5,
        'condTerex1'=>$condTerex1,'condTerex2'=>$condTerex2,'condTerex3'=>$condTerex3,'condTerex4'=>$condTerex4,'condTerex5'=>$condTerex5,
        'condBulaz1'=>$condBulaz1,'condBulaz2'=>$condBulaz2,'condBulaz3'=>$condBulaz3,'condBulaz4'=>$condBulaz4,'condBulaz5'=>$condBulaz5,

        'sc1'=>$sc1,'sc2'=>$sc2
        
        ]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Voyages;
use App\arrets;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class arretController extends Controller
{
    public function searchhhh(Request $request)
    {
        $DateAr = DB::table('arret_camions')
        ->whereDay('Date', '=', date('d'))
        ->whereMonth('Date', '=', date('m'))
        ->whereYear('Date', '=', date('Y'))
        ->count();

       

        $nombreArrets = DB::table('arret_camions')->count();
        $arrets  = DB::table('arrets')->count();
        $arrets_camions  = DB::table('arret_camions')->count();


        $arretP1 = arrets::where('Num_Poste',1)->count();
        $arretP2 = arrets::where('Num_Poste',2)->count();
        $arretP3 = arrets::where('Num_Poste',3)->count();
        
        $arretPer1=number_format(($arretP1*100)/$arrets_camions, 2, '.', '');
        $arretPer2=number_format(($arretP2*100)/$arrets_camions, 2, '.', '');
        $arretPer3=number_format(($arretP3*100)/$arrets_camions, 2, '.', '');
        
        $ar1 = arrets::where('Code_Ar',1)->count();
        $ar2 = arrets::where('Code_Ar',2)->count();

        $camAr1 = arrets::where('Num_Cam',1)->count();
        $camAr2 = arrets::where('Num_Cam',2)->count();
        $camAr3 = arrets::where('Num_Cam',3)->count();      
        $camAr4 = arrets::where('Num_Cam',4)->count();
        $camAr5 = arrets::where('Num_Cam',5)->count();
        $camAr6 = arrets::where('Num_Cam',6)->count();
        $camAr7 = arrets::where('Num_Cam',7)->count();
        $camAr8 = arrets::where('Num_Cam',8)->count();
        $camAr9 = arrets::where('Num_Cam',9)->count();
        $camAr10 = arrets::where('Num_Cam',10)->count();
        $camAr11 = arrets::where('Num_Cam',11)->count();
        $camAr12 = arrets::where('Num_Cam',12)->count();
        $camAr13 = arrets::where('Num_Cam',13)->count();

        $voy1 = Voyages::where('NumVoy',1)->sum('Poids');
        $voy2 = Voyages::where('NumVoy',2)->sum('Poids');
        $voy3 = Voyages::where('NumVoy',3)->sum('Poids');
        $users = DB::table('conducteurs')->count();
		$vv = DB::table('voyages')->count();
        $kk = DB::table('camions')->count();

        $search = $request->get('search');
        $Tousarrets = arrets::limit(5)->where('Date','like','%'.$search.'%')->orderBy('Date', 'DESC')->get();
        

        return view('arret')->with(['users'=>$users,'DateAr'=>$DateAr,
        'vv'=>$vv,'kk'=>$kk,'nombreArrets'=>$nombreArrets,'arrets'=>$arrets,'Tousarrets'=>$Tousarrets,
        'voy1'=>$voy1,'voy2'=>$voy2,'voy3'=>$voy3,
        'ar1'=>$ar1,'ar2'=>$ar2,
        'camAr1'=>$camAr1,'camAr2'=>$camAr2,
        'camAr3'=>$camAr3,'camAr4'=>$camAr4,
        'camAr5'=>$camAr5,'camAr6'=>$camAr6,
        'camAr7'=>$camAr7,'camAr8'=>$camAr8,
        'camAr9'=>$camAr9,'camAr10'=>$camAr10,
        'camAr11'=>$camAr11,'camAr12'=>$camAr12,
        'camAr13'=>$camAr13,

        'arretP1'=>$arretP1,'arretP2'=>$arretP2,'arretP3'=>$arretP3,
        'arretPer1'=>$arretPer1,'arretPer2'=>$arretPer2,'arretPer3'=>$arretPer3]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

class qualiteController extends Controller
{
    
    public function searcchhhh(Request $request)
    {
    $Qualitetyp1 = DB::table('voyages')
            ->join('qualite', 'voyages.Code_Q', '=', 'qualite.CodeQ')
            ->select('voyages.Code_Q')
            ->where('qualite.Code_Typ',1)
            ->count();
    $Qualitetyp2 = DB::table('voyages')
            ->join('qualite', 'voyages.Code_Q', '=', 'qualite.CodeQ')
            ->select('voyages.Code_Q')
            ->where('qualite.Code_Typ',2)
            ->count();
          
            return view('qualite',['Qualitetyp1'=>$Qualitetyp1,'Qualitetyp2'=>$Qualitetyp2
            ]);

    }
}

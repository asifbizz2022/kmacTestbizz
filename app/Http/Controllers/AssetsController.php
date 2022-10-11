<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssetsController extends Controller
{
   public function index(){
       return view('Admin.assets');
   }
   public function get_table_data(Request $request)
   {
       if($request->ajax()){

           $assets = DB::table('kmac_asset')->get();

           return response()->json([
               'data'=>$assets,
           ]);

       } else {
           return response()->json([
               'data'=>'No Dat Available',
           ]);

       }
   }
}

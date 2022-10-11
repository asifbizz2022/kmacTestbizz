<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuppliesController extends Controller
{
    public  function  index(){
        return view('Admin.supplies');
    }
    public  function  get_table_data(Request $request)
    {
        $result = DB::table('kmac_inventory')
            ->where('inv_category_id', 2)
            ->get();

        return response()->json([
            'data' => $result,
        ]);
    }
    public function show(Request $request)
    {
        $id = $request->input('id');
        $result = DB::table('kmac_inventory')
            ->where('id', $id)
            ->get();

        return response()->json($result);
    }
}

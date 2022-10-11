<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EquipmentController extends Controller
{
    public function index()
    {
        return view('Admin.equipment-list');
    }
    public function get_table_data(Request $request)
    {
        $result = DB::table('kmac_inventory')
            ->where('inv_category_id', 3)
            ->get();

        return response()->json([
            'data' => $result,
        ]);
    }
    public function add_equipment(Request $request)
    {
        print "<pre>";
        print_r($request->input());
        exit();
    }

    public function show(Request $request)
    {
        $id = $request->input("id");

        $result = DB::table('kmac_inventory')
            ->where('id',$id)
            ->get();

        if($result){
            return response()->json($result);
        }
    }


    public function edit(Request $request)
    {

        $id = $request->input("id");

        $result = DB::table('kmac_inventory')
            ->where('id',$id)
            ->get();

        if($result){
            return response()->json($result);
        }
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request)
    {
        $id = $request->input("id");
        $result = DB::table('kmac_inventory')
            ->where('id',$id)
            ->delete();

        if($result){
            return response()->json($result);
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $employee = DB::table('kmac_employees')->get();
        $inventory = DB::table('kmac_inventory')->get();
        $chemicals = DB::table('kmac_inventory')->where('inv_category_id',1)->get();
        $equipments = DB::table('kmac_inventory')->where('inv_category_id',2)->get();
        $supplies = DB::table('kmac_inventory')->where('inv_category_id',3)->get();

        $data = DB::table('kmac_employees')
            ->join('kmac_designations','kmac_designations.designation_id','kmac_employees.designation_id')
            ->get();

        $banner = DB::table('banners')->get();
        return view('Admin.dashboard-analytics')->with([
            'employee'=>count($employee),
            'inventory'=>count($inventory),
            'chemicals'=>count($chemicals),
            'equipments'=>count($equipments),
            'supplies'=>count($supplies),
            'result'=>$data,
            'banners'=>$banner,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

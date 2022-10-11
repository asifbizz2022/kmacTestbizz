<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\ChemicalsController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\SuppliesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'] );
Route::get('form/elements',function(){
    return view('Admin.form-elements');
});
Route::get('table',function(){
    return view('Admin.table');
});
Route::get('blank',function(){
    return view('blank');
});

Route::get('profile',function(){
    return view('Admin.profile');
});
Route::get('profile/setting',function(){
    return view('Admin.profile-setting');
});
Route::get('profile/notification',function(){
    return view('Admin.profile-notification');
});
Route::get('profile/security',function(){
    return view('Admin.profile-security');
});

Route::get('login',function(){
    return view('Admin.auth-login');
});
Route::get('register',function(){
    return view('Admin.auth-register');
});
Route::get('contact/grid',function(){
    return view('Admin.contact-grid');
});
Route::get('contact/new',function(){
    return view('Admin.contact-new');
});
///employees
Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('employee/list',[EmployeeController::class, 'index'])->name('emp.list');
Route::any('employee/add',[EmployeeController::class, 'add_employee'])->name('emp.add');
Route::any('employee/edit/{id}',[EmployeeController::class, 'edit'])->name('emp.edit');
Route::post('employee/update',[EmployeeController::class, 'update'])->name('emp.update');
Route::post('employee/store',[EmployeeController::class, 'store_employee']);
Route::any('employee/delete/{id}',[EmployeeController::class, 'delete'])->name('emp.delete');
Route::get('employee/details/{id}',[EmployeeController::class, 'get_emp_details'])->name('emp.details');
Route::any('employee/table',[EmployeeController::class, 'get_emp_data']);
Route::get('employee/table/view',[EmployeeController::class, 'employee_table_view'])->name('emp.table');
///inventory controller
Route::get('inventory',[InventoryController::class, 'index'])->name('inventory');
Route::any('inventory/table',[InventoryController::class , 'get_table_data']);
Route::any('inventory/edit',[InventoryController::class , 'edit']);
Route::post('inventory/update',[InventoryController::class, 'update']);
Route::post('inventory/add',[InventoryController::class, 'add_inventory']);
Route::post('inventory/delete',[InventoryController::class, 'delete']);
///assets
Route::get('assets',[AssetsController::class, 'index'])->name('assets');
Route::any('assets/table',[AssetsController::class, 'get_table_data']);
///chemicals
Route::get('chemicals',[ChemicalsController::class, 'index'])->name('chemicals');
Route::any('chemicals/table',[ChemicalsController::class, 'get_table_data']);
Route::any('chemicals/edit',[ChemicalsController::class, 'show']);
///supplies
Route::get('supplies',[SuppliesController::class, 'index'])->name('supplies');
Route::any('supplies/table',[SuppliesController::class, 'get_table_data']);
//Equipments
Route::get('equipment',[EquipmentController::class, 'index'])->name('equipments');
Route::any('equipment/table',[EquipmentController::class , 'get_table_data']);
Route::post('equipment/edit',[EquipmentController::class, 'edit']);
Route::get('equipment/delete',[EquipmentController::class, 'delete']);




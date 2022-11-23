<?php

use App\Models\Division;
use App\Models\Inventory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardItemController;
use App\Http\Controllers\DashboardBrandController;
use App\Http\Controllers\DashboardDivisionController;
use App\Http\Controllers\DashboardEmployeeController;
use App\Http\Controllers\DashboardTypeItemController;
use App\Http\Controllers\DashboardInventoryController;
use App\Http\Controllers\DashboardMaintenanceController;
use App\Http\Controllers\LaporanController;

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

Route::get('/', function () {
    return view('index', [
        'divisions' => Division::all(),
    ]);
})->middleware('auth');

Route::get('/inventaries-div', function ()  {
    return view('details', [
        'inventories' => Inventory::where($employee->division->name, '=', $division)->get(),
    ]);
});

Route::get('/dashboard', function () {
    return view('index', [
        'divisions' => Division::all(),
    ]);
})->middleware('auth');

Route::get('/dashboard1', function () {
    return view('dashboard.bagianUmum');
    
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/items', DashboardItemController::class)->middleware('auth');
Route::resource('/types', DashboardTypeItemController::class)->middleware('auth');
Route::resource('/brands', DashboardBrandController::class)->middleware('auth');
Route::resource('/divisions', DashboardDivisionController::class)->middleware('auth');
Route::resource('/employees', DashboardEmployeeController::class)->middleware('auth');
Route::resource('/inventories', DashboardInventoryController::class)->middleware('auth');
Route::resource('/maintenances', DashboardMaintenanceController::class)->middleware('auth');
Route::resource('/laporan', LaporanController::class)->middleware('auth');

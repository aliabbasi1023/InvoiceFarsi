<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\admin\AdminController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'Panel','namespace'=>'Panel'],function (){
    Route::get("/factors/List", [PanelController::class, "factorsList"])->name("factorsList");
    Route::get("/Factors/Details", [PanelController::class, "FactorsDetails"])->name("FactorsDetails");
    Route::get("/Factors/Comment", [PanelController::class, "FactorsComment"])->name("FactorsComment");
})

;Route::group(['prefix' => 'Admin','namespace'=>'Admin'],function (){
    Route::get("/Users/List", [AdminController::class, "UsersList"])->name("UsersList");
    Route::get("/Users/Add/Form", [AdminController::class, "UsersAddForm"])->name("UsersAddForm");
});

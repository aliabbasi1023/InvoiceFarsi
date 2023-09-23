<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin_APIController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'Manage/User','namespace'=>'User'], function () {

    Route::post('/User/List/Delete', [Admin_APIController::class , 'UserListDelete'])->name('UserListDelete');
    Route::get('/User/List/Data', [Admin_APIController::class , 'UserListData'])->name('UserListData');
    Route::post('/User/List/Add', [Admin_APIController::class , 'UserAdd'])->name('UserAdd');


});

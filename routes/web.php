<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LavaController;
use App\Http\Controllers\AccountsController;

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
    return view('sections.home', [
        "handle" => "home"
    ]);
});

Route::get('/users', function () {
    return view('sections.users', [
        "handle" => "users"
    ]);
});

Route::get('/accounts', [AccountsController::class, 'index']);
Route::post('/accounts', [AccountsController::class, 'create']);

Route::get('/lava', function (){
    return view('landing');
});
Route::get('/ctrl', function (){
    $returnvalue = LavaController::show();
    return $returnvalue;
});
Route::get('/add-tree', function (){
    LavaController::addTree();
    return "ok";
});
Route::get('/trees', function (){
    return LavaController::getTrees();
});

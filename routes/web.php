<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LavaController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\UsersController;

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
})->middleware('auth');

Route::get('/users', [UsersController::class, 'index'])->middleware('auth');
Route::post('/users/create', [UsersController::class, 'create'])->middleware('auth');

Route::get('/accounts', [AccountsController::class, 'index'])->middleware('auth');
Route::post('/accounts', [AccountsController::class, 'create'])->middleware('auth');

Route::get('/login_now', function (){
    return view('sections.login');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

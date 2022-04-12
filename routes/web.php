<?php


use Illuminate\Support\Facades\Route;
//agragamos los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\RecursosController;
use App\Http\Controllers\RolesController;

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
    return view('homepage');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function(){
Route::resource('roles',RolesController::class);
Route::resource('usuarios',UsuariosController::class);
Route::resource('cursos', CursosController::class);
Route::resource('actividades', ActividadesController::class);
Route::resource('recursos', RecursosController::class);


});
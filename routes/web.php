<?php


use Illuminate\Support\Facades\Route;
//agragamos los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\RecursosController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Auth;

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


//CREACIÓN DE RUTAS PARA EL HOME PAGE
Route::get('/home.home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homepage.historia', [App\Http\Controllers\Historia::class, 'index'])->name('historia');
Route::get('/homepage.vision', [App\Http\Controllers\vision::class, 'index'])->name('vision');
Route::get('/homepage.oferta', [App\Http\Controllers\Oferta::class, 'index'])->name('oferta');
Route::get('/homepage.contactos', [App\Http\Controllers\Contactos::class, 'index'])->name('contactos');
Route::get('/homepage.admisiones',   [App\Http\Controllers\Admisiones::class, 'index'])->name('admisiones');



//CREACION DE RUTAS PARA LOS CCRUDS DEL MDULO ADMINISTRADOR
Route::group(['middleware'=>['auth']],function(){
Route::resource('roles',RolesController::class);
Route::resource('usuarios',UsuariosController::class);
Route::resource('cursos', CursosController::class);
Route::resource('actividades', ActividadesController::class);
Route::resource('recursos', RecursosController::class);


});
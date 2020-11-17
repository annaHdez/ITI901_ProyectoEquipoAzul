<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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
    return view('index');
});
Route::get('/cache', function () {
    Artisan::call('config:clear');
    Artisan::call('view:clear'  );
    Artisan::call('route:clear' );
    Artisan::call('cache:claer' );
    return "Caché limpio";
})->name('cache');

Route::resource('Login',        'LoginController'         );
Route::resource('Usuarios',     'UserController'          );
Route::resource('Producto',     'Producto_Controller'     );
Route::resource('Categoria',    'Categoria_Controller'    );
Route::resource('Rol',          'Rol_Controller'          );
Route::resource('Detalle_Venta','Detalle_Venta_Controller');


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('Usuarios',     'UserController'          );
    Route::resource('Productos',    'Producto_Controller'     );
    Route::resource('Categorias',   'Categoria_Controller'    );
    Route::resource('Rol',          'Rol_Controller'          );
    Route::resource('Detalle_Venta','Detalle_Venta_Controller');
});
    Route::get('/home', 'HomeController@index')->name('home');    
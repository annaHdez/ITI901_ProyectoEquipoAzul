<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto_Model;

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

Route::get('/', 
    function () 
    {
        $table_producto  = Producto_Model::all()                 ;
        return view('index',['table_producto'=>$table_producto]);
    })->name('index');

Route::get('/cache', function () {
    Artisan::call('config:clear');
    Artisan::call('view:clear'  );
    Artisan::call('route:clear' );
    Artisan::call('cache:clear' );
    return "Caché limpio";
})->name('cache');

//Rutas para el Administrador
Route::resource('Login',        'LoginController'         );
Route::resource('Usuarios',     'UserController'          );
Route::resource('Productos',    'Producto_Controller'     );
Route::resource('Categoria',    'Categoria_Controller'    );
Route::resource('Rol',          'Rol_Controller'          );
Route::resource('Detalle_Venta','Detalle_Venta_Controller');


//Rutas para el cliente
Route::resource('Cliente_Detalle_Compras', 'ForCustomer_Detalle_Compra_Controler');
Route::resource('Cliente_Producto'       , 'ForCustomer_Producto_Controller'      );
Route::resource('Cliente_Usuario'        , 'ForCustomer_User_Controller'          );
Route::post('/agregarCarrito'            , 'ForCustomer_Producto_Controller@agregarCarrito' )->name('agregarCarrito' );
Route::post('/confirmarPedido'           , 'ForCustomer_Producto_Controller@confirmarPedido')->name('confirmarPedido');
Route::post('/vaciarCarrito'             , 'ForCustomer_Producto_Controller@vaciarCarrito'  )->name('vaciarCarrito'  );
Route::post('/quitarElemento'            , 'ForCustomer_Producto_Controller@quitarElemento' )->name('quitarElemento' );
Route::get('/verCarrito'                 , 'ForCustomer_Producto_Controller@verCarrito'     )->name('verCarrito');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('Usuarios',     'UserController'          );
    Route::resource('Productos',    'Producto_Controller'     );
    Route::resource('Categorias',   'Categoria_Controller'    );
    Route::resource('Rol',          'Rol_Controller'          );
    Route::resource('Detalle_Venta','Detalle_Venta_Controller');

});
    Route::get('/home', 'HomeController@index')->name('home');    
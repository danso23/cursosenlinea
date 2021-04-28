<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'ProductoController@home')->name('home');
/****PRODUCTOS****/
Route::get('productos', 'ProductoController@index')->name('productos');
Route::get('productos/detalle/{id}', 'ProductoController@productoDescripcion')->name('producto.detalle');
##ProductoXcategoria
Route::get('categoria/{id}', 'ProductoController@productoXCategoria')->name('categoria');
##Buscador
Route::get('buscador-productos', 'ProductoController@buscador')->name('buscador');
/****FIN PRODUCTOS****/

/****CATEGORIAS****/
Route::get('categorias', 'CategoriaController@index')->name('categorias');
/****FIN CATEGORIAS****/

/****ATRIBUTOS****/
Route::post('atributos-producto/{id}', 'Producto_AtributoController@getAtributosXProducto')->name('atributos.producto');
/****FIN ATRIBUTOS****/

/****CARRITO****/
Route::post('cart-add', 'CartController@add')->name('cart.add');
Route::get('cart/checkout', 'CartController@cart')->name('cart.checkout');
Route::post('remove-item', 'CartController@removeItem')->name('cart.remove');
Route::post('completa-envio', 'CartController@guardaEnvio')->name('guarda.envio');

/**** PAYMENT *****/
Route::get('/payment', 'PaymentController@index')->name('payment');
Route::post('/payment/processPayment', 'PaymentController@processPayment')->name('processPayment');
/******* TICKET *********/
Route::get('/payment/ticket', 'PaymentController@ticket')->name('payment.ticket');

Route::get('/paypal/pay', 'PaypalController@payWithPayPal');
Route::get('/paypal/status', 'PaypalController@payPalStatus');

Route::post('/whatsend', 'Whatsapp\WhatsappController@sendMessage')->name('whatsend');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



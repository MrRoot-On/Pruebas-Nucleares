<?php

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

Route::get('qr-code-g', function ()
{
\QrCode::size(500)
    ->format('png')
    ->generate('Obed Nava Hk', public_path('images/qrcode.png'));
return view('qrCode');
});

Route::get('barcode', 'barcode@barcode');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

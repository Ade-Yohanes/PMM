<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\QuoteController;


use App\Http\Controllers;


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



Route::get('/', [FrontendController::class, 'home' ]);


// Route::get('/about', 'App\Http\Controllers\FrontendController@about');

Route::get('/about', [ FrontendController::class, 'about' ] );

// Route::get('/service', [ FrontendController::class, 'about' ] );

Route::get('/service/{slug}', [ FrontendController::class, 'service_detail' ] );

Route::get('/service_test/{id}', [ FrontendController::class, 'service_detail_test' ] );


Route::get('/service', [ FrontendController::class, 'service' ] );


// Route::get('/contact', [ FrontendController::class, 'contact' ] );

Route::get('/contact', [ QuoteController::class, 'contact' ] ) ;

Route::post('/contact/store', [ QuoteController::class, 'quote_store' ] ) ;

Route::post('/contact', ['as'=>'contact.store','uses'=>'QuoteController@contactPost']);






// Route::get('/', function () {
//     return view('about');
// });

// Route::get('/about', function () {
//     return view('about');
// }) ;

// Route::get('/service', function () {
//     return view('service');
// }) ;

// Route::get('/contact', function () {
//     return view('contact');
   
// }) ;


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'user'], function () {
    Voyager::routes();
});

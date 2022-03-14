<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\UsersControler;
use App\Http\Controllers\Admin\CongesController;

use App\Http\Controllers\User\UserDashController;
use App\Http\Controllers\Admin\CongerController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','Auth\LoginController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'],['isAdmin'])->group(function(){
    Route::get('/dashboard','Admin\FrontendController@index');

    Route::get('users','Admin\UsersControler@index');
    Route::get('add-user','Admin\UsersControler@add');
    Route::post('insert-user','Admin\UsersControler@insert');

    // Pour les employer
    Route::get('edit-user/{id}', [UsersControler::class,'edit']);
    Route::put('update-user/{id}',[UsersControler::class,'update']);
    Route::get('delete-user/{id}',[UsersControler::class,'destroy']);

    // Pour les Conges
    Route::get('conges','Admin\CongesController@index');

    // changer les status
    Route::get('accepter/{id}', 'Admin\CongesController@changeAccepter');
    Route::get('refuser/{id}', 'Admin\CongesController@changeRefuser');

     // Pour le Rapport
    Route::get('download-rapp', 'Admin\CongesController@downpdf');

    Route::get('adferies','Admin\FrontendController@adferies');

    Route::get('search/{id}','Admin\UsersControler@search');
});


    Route::get('/userdash',[UserDashController::class,'index']);

    Route::get('conger','User\CongerController@index');
    Route::get('add-conger','User\CongerController@add');
    Route::post('insert-conger','User\CongerController@insert');

    Route::get('edit-conger/{id}', 'User\CongerController@edit');
    Route::put('update-conger/{id}','User\CongerController@update');
    Route::get('delete-conger/{id}','User\CongerController@destroy');


    Route::get('download/{id}','Admin\CongesController@download');

    Route::get('feries','User\UserDashController@feries');

    // Google 2fA
    Route::post('/complete-registration', 'Auth\RegisterController@completeRegistration');


    
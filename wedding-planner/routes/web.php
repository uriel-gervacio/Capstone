<?php

use App\Mail\Invitation;

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

//Task Routes...
//Route::get('/tasks', 'TaskController@index');
//Route::post('/task', 'TaskController@store');
//Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/' . Invitation::BRIDE_URL . '/{wedding}', 'Auth\RegisterController@invitationBride'); 
Route::get('/' . Invitation::GROOM_URL . '/{wedding}', 'Auth\RegisterController@invitationGroom');

Auth::routes();

// Wedding Routes...
Route::group(['middleware' => 'auth'], function () {

    //weddings
    Route::get('/weddings/create', 'WeddingController@create');
    Route::post('/weddings/create', 'WeddingController@store');
    Route::get('/weddings/search', 'WeddingController@index');
    Route::get('/weddings/details', 'WeddingController@details');
    Route::get('/weddings/edit', 'WeddingController@coupleEdit');
    Route::patch('/weddings/{wedding}', 'WeddingController@update'); 
    Route::get('/weddings/details/{wedding}', 'WeddingController@details');
    Route::patch('/weddings/details/{wedding}', 'WeddingController@save');
    Route::delete('/weddings/details/{wedding}', 'WeddingController@destroy');
    Route::get('/weddings/readingText', 'WeddingController@readingText');
    Route::get('/weddings/{wedding}', 'WeddingController@view');
    
    Route::get('/wedding/details/music','MusicController@getMusic');
    
    //home
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin', 'AdminController@admin')
        ->name('admin');
    
    //readings
    Route::get('/readings', 'ReadingController@index');
    Route::get('/readings/create', 'ReadingController@create');
    Route::get('/readings/edit/{reading}', 'ReadingController@edit');
    Route::patch('/readings/{reading}', 'ReadingController@update');
    Route::post('/readings/create', 'ReadingController@store');
    Route::delete('/readings/{reading}', 'ReadingController@delete');
    
    //music
    Route::get('/music/index','MusicController@index');
    Route::get('/music/create','MusicController@create');
    Route::get('/music/edit/{music}', 'MusicController@edit');
    Route::patch('/music/{music}', 'MusicController@update'); 
    Route::post('/music/create', 'MusicController@store');
    Route::delete('/music/{music}', 'MusicController@delete');
});

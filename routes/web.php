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

Route::get('/', 'VisitorController@index');
Route::get('/login', 'VisitorController@login');
Route::post('/sendMail', 'VisitorController@sendMail');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/trabajos', 'VisitorController@works');
Route::get('/trabajos/{id}', 'VisitorController@article');

Route::prefix('app')->group(function () { 
    
    Route::namespace('Admin')->group(function () { 

        Route::get('/', 'DashboardController@index');

        Route::prefix('perfil')->group(function () { 
            Route::get('/', 'PerfilController@index');
            Route::get('edit', 'PerfilController@edit');
            Route::post('edit', 'PerfilController@update');
            Route::get('password', 'PerfilController@password');
            Route::post('password', 'PerfilController@passwordUpdate');
        });
        

        Route::prefix('articles')->group(function () {
            Route::get('', 'ArticlesController@list');
            Route::get('edit/{id}', 'ArticlesController@edit');
            Route::post('edit/{id}', 'ArticlesController@update');
            Route::get('create', 'ArticlesController@create');
            Route::post('create', 'ArticlesController@store');            
            Route::get('delete/{id}', 'ArticlesController@delete');            

            Route::get('edit/{id}/uploadPhotos', 'ArticlesController@uploadPhotos');
            Route::get('getPhotos/{id}', 'ArticlesController@getPhotos');
            Route::post('edit/{id}/uploadPhotos', 'ArticlesController@storePhoto');
            Route::post('edit/{id}/deletePhoto', 'ArticlesController@deletePhoto');
            Route::post('edit/{id}/uploadPhotos/highlight', 'ArticlesController@highlight');

            Route::prefix('types')->group(function () {
                Route::get('', 'ArticleTypesController@list');
                Route::get('edit/{id}', 'ArticleTypesController@edit');
                Route::post('edit/{id}', 'ArticleTypesController@update');
                Route::get('create', 'ArticleTypesController@create');
                Route::post('create', 'ArticleTypesController@store');            
                Route::get('delete/{id}', 'ArticleTypesController@delete');            
            });
        });

    });

});

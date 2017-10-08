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


Route::prefix('admin')->group(function(){



    //Route::get('/', function () {
    //
    //    return view('welcome');
    //});
    //==== Simple route

    Route::get('/','WelcomeController@welcome') ;




    //Route::get('/about-us', function(){
    //
    //    return view('about');
    //})->name('BioData');
    // ==== Route Naming

    Route::get('/about','WelcomeController@about')->name('BioData') ;



    //Route::get('/users/{dept}/{username}/{id}', function ($dept,$username, $id) {
    //
    //    return view('users',compact('dept','username','id'));
    //
    //})->name('MyAccount')->where(['dept' => '[A-Za-z]+', 'username' => '[A-Za-z]+','id' => '[0-9]+']);
    // ==== Route Naming with compact & conditions

    Route::get('/users/{dept}/{username}/{id}','WelcomeController@users')->name('MyAccount')->where(['dept' => '[A-Za-z]+', 'username' => '[A-Za-z]+','id' => '[0-9]+']);



    //Route::get('/usersurl/{dept}/{username}/{id}', function ($thisdept,$thisIsusername, $thisisId) {
    //
    //    return view('usersurl',compact('thisdept','thisIsusername','thisisId'));
    //
    //});
    // ==== Route with compact & no-naming, no-conditions

    Route::get('/usersurl/{dept}/{username}/{id}','WelcomeController@usersurl');



    Route::get('/contact', 'WelcomeController@contact')->name('contact');
    // Another simple Route


});
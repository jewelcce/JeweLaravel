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





Route::get('/', function () {

    return view('welcome');
});
//Simple route




Route::get('/about-us', function(){

    return view('about');
})->name('BioData');
// Route Naming




Route::get('/users/{dept}/{username}/{id}', function ($thisdept,$thisIsusername, $thisisId) {

    return view('users',compact('thisdept','thisIsusername','thisisId'));

})->name('MyAccount')->where(['dept' => '[A-Za-z]+', 'username' => '[A-Za-z]+','id' => '[0-9]+']);
// Route Naming with compact & conditions




Route::get('/usersurl/{dept}/{username}/{id}', function ($thisdept,$thisIsusername, $thisisId) {

    return view('users',compact('thisdept','thisIsusername','thisisId'));

});
// Route with compact & no-naming, no-conditions



Route::get('/contact', function () {

    return view('contact');
});
// Another simple Route


});
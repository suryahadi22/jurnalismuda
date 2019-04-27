<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| HAPPY CODING COOOKKK....
|
*/

// FRONT PAGE

Route::get('/', function () {
    return view('welcome');
})->name('home');

// DASHBOARD PAGE

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/profil', 'ProfileController@redirectCok');

Route::get('/dashboard/profil/{id}', 'ProfileController@edit')->name('profil');

Route::post('/dashboard/profil/updateinfo/{id}', 'ProfileController@informationUpdate');   //INFORMATION UPDATE

Route::post('/dashboard/profil/ppupdate/{id}', 'ProfileController@profilephotoUpdate');     // PHOTO PROFILE UPDATE

Route::post('/dashboard/profil/socialupdate/{id}', 'ProfileController@socialmediaUpdate');  // INFORMATION OF SOCIAL NETWORKING USER

Route::get('/register/buat-profil/{id}', 'ProfileController@create')->name('buat_profil');

Route::post('/register/buat-profil/store/{id}', ['as' => 'update_process_profile', 'uses' => 'ProfileController@store']);

Route::get('/dashboard/artikel', 'ArticleController@index')->name('artikel_dashboard');

Route::get('/dashboard/artikel/buat', 'ArticleController@create')->name('buat_artikel_dashboard');

Route::get('/dashboard/kategori', 'KategoriController@index')->name('kategori_dashboard');
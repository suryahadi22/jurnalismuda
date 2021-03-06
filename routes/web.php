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

Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');

Route::get('/dashboard/profil', 'Dashboard\ProfileController@redirectCok');

Route::get('/dashboard/profil/{id}', 'Dashboard\ProfileController@edit')->name('profil');

Route::post('/dashboard/profil/updateinfo/{id}', 'Dashboard\ProfileController@informationUpdate');   //INFORMATION UPDATE

Route::post('/dashboard/profil/ppupdate/{id}', 'Dashboard\ProfileController@profilephotoUpdate');     // PHOTO PROFILE UPDATE

Route::post('/dashboard/profil/socialupdate/{id}', 'Dashboard\ProfileController@socialmediaUpdate');  // INFORMATION OF SOCIAL NETWORKING USER

Route::put('/dashboard/profil/passwordupdate', 'Dashboard\ProfileController@passwordUpdate')->name('password.update');

Route::get('/register/buat-profil/{id}', 'Dashboard\ProfileController@create')->name('buat_profil');

Route::post('/register/buat-profil/store/{id}', ['as' => 'update_process_profile', 'uses' => 'Dashboard\ProfileController@store']);

Route::get('/dashboard/artikel', 'Dashboard\ArticleController@index')->name('artikel_dashboard');

Route::get('/dashboard/artikel/buat', 'Dashboard\ArticleController@create')->name('buat_artikel_dashboard');

Route::get('/dashboard/kategori', 'Dashboard\KategoriController@index')->name('kategori_dashboard');
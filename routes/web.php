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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'FrontendController@index');
Route::get('/singleblog/{artikel}', 'FrontendController@singleblog');
Route::get('/singleblog2/{universitas}', 'FrontendController@singleblog2');
Route::get('/category', function () {
    return view('category');
});

Route::group(
    ['prefix' => '/'],
    function () {
        route::get('singleblog', 'FrontendController@');
    }
);


Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/singleblog', function () {
    return view('singleblog');
});

Route::get('/singleblog2', function () {
    return view('singleblog2');
});

Route::get('/kontak', function () {
    return view('kontak');
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('kategori', 'KategoriController');
    Route::resource('artikel', 'ArtikelController');
    Route::resource('tag', 'TagController');
    Route::resource('jurusan', 'JurusanController');
    Route::resource('fakultas', 'FakultasController');
    Route::resource('universitas', 'UniversitasController');
});

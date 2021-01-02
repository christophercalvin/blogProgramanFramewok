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

Route::group(
    ['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>['auth']],
    function(){
        Route::get('dashboard', 'DashboardController@index');
        Route::resource('categories', 'Categories');
        Route::resource('content', 'ContentController');
        Route::resource('AboutUs', 'AboutUsController');
        Route::resource('WhyChooseUs', 'WhyChooseUsController');
        Route::resource('ContactUs', 'ContactUsController');
        Route::resource('Blog', 'BlogController');
    }
);


Route::get('/', 'IndexController@index');
Route::get('/index', 'IndexController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/whychoose', 'WhyChooseController@index');
Route::get('/blog', 'ViewBlogController@index');
Route::get('/blog/{id}', 'ViewBlogController@show');
Route::get('/kategori', 'KategoriController@index');
Route::get('/kategori/{id}', 'KategoriController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');

Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit','TicketsController@edit');
Route::post('/ticket/{slug?}/edit','TicketsController@update');

Route::post('/ticket/{slug?}/delete','TicketsController@destroy');



Route::get('sendemail', function () {
    $data = array('name' => "Learning Laravel",);
        Mail::send('emails.welcome', $data, function ($message) {
            $message->from('george.chuks.gc51@gmail.com', 'Learning Laravel');
            $message->to('george.chuks.gc51@gmail.com')->subject('Learning Laravel test email');
        });
    return "Your email has been sent successfully";
    });

Route::post('/comment', 'CommentsController@newComment');

Route::get('/search', 'BlogController@search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    //using Resources 

    Route::view('dashboard', 'admin/home');

    Route::resource('/users', 'UsersController', ['except' => ['show', 'store', 'create']]);
    Route::resource('/posts', 'PostController', ['except' => 'show']);
    Route::resource('/categories', 'CategoriesController',  ['except' => 'show']);
    
});

Route::resource('/blog', 'BlogController');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::post('app/create_tag','AdminController@addTag');
Route::get('app/get_tags','AdminController@getTag');
Route::post('app/edit_tag','AdminController@editTag');
Route::post('app/delete_tag','AdminController@deleteTag');
Route::post('/app/upload','AdminController@upload');

Route::post('/app/create_user','AdminController@createUser');

 Route::get('/app/get_users','AdminController@getUsers');  


Route::post('/app/admin_login','AdminController@adminLogin');






Route::get('/test', function () {
    return view('welcome');
});

Route::get('/new','TestController@controllerMethod');

Route::any('{slug}', function(){
    return view('welcome');

});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

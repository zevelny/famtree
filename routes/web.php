<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

if (App::environment('local')) {
    Artisan::call('view:clear');
}

Route::get('/', function () {
    return view('login');
});

Route::get('/reg', function () {
    return view('registration');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::any('new_tree','TreeController@index');
Route::any('create_tree','TreeController@create');
Route::any('del_tree','TreeController@delete');
Route::any('workspace','PersonController@workspace');


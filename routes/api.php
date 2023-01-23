<?php

use App\Microservice\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Route;

Route::prefix('{microserviceName}')->group(function (){
    Route::any('hello','MainController@hello');

    Route::prefix('user')->group(function (){
        Route::any('reg','UserController@create');
        Route::any('login','UserController@login');
    });
});

Route::fallback(function (){
    throw new NotFoundException();
});

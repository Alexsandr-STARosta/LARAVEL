<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    
   return view('welcome');
});

Route::get('/phpinfo', function () {
    return phpinfo();
    
});


Route::match(['get'], 'palindrom/','App\Http\Controllers\TestController@Phrase')->middleware('Ipinfo');

Route::get('/ip','App\Http\Controllers\TestController@IPinfo');





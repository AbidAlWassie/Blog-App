<?php

use Illuminate\Support\Facades\Route;




Route::get('/', 'PagesController@index');

Route::get('/about', function () {
    return view('about');
});

// Route::get('/users/{id}', function ($id) {
//     return 'This is user ' . $id;
// });

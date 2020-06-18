<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PastaController@Index') -> name ('home');

Route::get('/contacts', function () {
    return view('contacts');
}) -> name ('contacts');

Route::get('/showPasta/{id}', 'PastaController@ShowPasta') -> name ('showPasta');

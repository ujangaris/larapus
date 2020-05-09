<?php
Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/author/data', 'DataController@authors')->name('author.data');
//wajib taruh dibawah DataController
Route::resource('author', 'AuthorCOntroller');

<?php
Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/author', 'AuthorController@index')->name('author.index');
Route::get('/author/create', 'AuthorController@create')->name('author.create');


Route::get('/author/data', 'DataController@authors')->name('author.data');

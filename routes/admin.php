<?php
Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/author/data', 'DataController@authors')->name('author.data');
Route::get('/book/data', 'DataController@books')->name('book.data');
Route::get('/borrow/data', 'DataController@borrows')->name('borrow.data');

//wajib taruh dibawah DataController
Route::resource('author', 'AuthorCOntroller');
Route::resource('book', 'BookCOntroller');


Route::get('borrow', 'BorrowCOntroller@index')->name('borrow.index');
Route::put('borrow/{borrowHistory}/return', 'BorrowCOntroller@returnBook')->name('borrow.return');


Route::get('report/top-book', 'ReportController@topBook')->name('report.top-book');
Route::get('report/top-user', 'ReportController@topUser')->name('report.top-user');

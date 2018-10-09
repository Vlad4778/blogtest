<?php




Route::get('/','BlogController@index');
Route::view('login','dashboard.sign-in');
// Route::view('/dash','dashboard.index');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::view('/','dashboard.index');
});

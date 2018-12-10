<?php
// Main Page
Route::get('/', function () {
    return view('welcome');
});
// Account tools
Route::prefix('account')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});
// Administration
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.home');
});
// Wishes
Route::prefix('wishes')->group(function () {
    Route::get('submit', 'WishesController@submitForm')->name('wish.submit');
    Route::post('create', 'WishesController@create')->name('wish.create');
    Route::get('all', 'WishesController@listAll')->name('wish.all');
});
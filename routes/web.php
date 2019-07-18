<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/post-add', 'HomeController@addPost')->name('adding');
Route::post('/post-save', 'HomeController@savePost')->name('save');
Route::get('/post-edit/{id}', 'HomeController@editPost')
    ->where('id', '\d+')
    ->name('post-edit');
Route::get('/post-delete/{id}', 'HomeController@deletePost')
    ->where('id', '\d+')
    ->name('post-delete');
Route::get('/delete/{id}', 'HomeController@delete')
    ->where('id', '\d+')
    ->name('delete');
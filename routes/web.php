<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('page.home');
Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');
Route::view('/impressum', 'pages.imprint')->name('page.imprint');
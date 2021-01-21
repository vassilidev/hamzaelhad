<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/avis', 'review')->name('review');
Route::view('/l-equipe', 'team')->name('team');
Route::view('/nos-services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');

Route::view('/service/shopify', 'shopify')->name('shopify');
Route::view('/service/stripe', 'stripe')->name('stripe');

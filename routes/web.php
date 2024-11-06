<?php

use App\Livewire\AddProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-product', AddProduct::class);

<?php

use App\Livewire\AddProduct;
use App\Livewire\Products;
use Illuminate\Support\Facades\Route;

Route::get('/', Products::class);

Route::get('/add-product', AddProduct::class);

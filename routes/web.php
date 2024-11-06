<?php

use App\Livewire\AddProduct;
use App\Livewire\Products;
use App\Livewire\UpdateProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', Products::class);

Route::get('/add-product', AddProduct::class);

Route::get('/update-product/{id}', UpdateProduct::class);

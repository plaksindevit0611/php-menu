<?php

use App\Controllers\PriceController;
use Illuminate\Support\Facades\Route;

$priceController = new PriceController();

Route::get('menu', [$priceController, 'index']);

Route::post('menu/get-price', [$priceController, 'getPrice']);

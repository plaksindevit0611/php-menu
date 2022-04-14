<?php

use App\Controllers\PriceController;
use Illuminate\Support\Facades\Route;

$menuController = new PriceController();

Route::get('menu', [$menuController, 'index']);

Route::post('menu/get-price', [$menuController, 'getPrice']);

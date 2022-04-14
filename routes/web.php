<?php

use App\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

$menuController = new MenuController();

Route::get('menu', [$menuController, 'index']);

Route::post('menu/get-price', [$menuController, 'getPrice']);

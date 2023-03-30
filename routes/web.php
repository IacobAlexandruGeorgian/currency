<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return [
                [
                    'name' => 'USD',
                    'value' => 0.22
                ],
                [
                    'name' => 'EUR',
                    'value' => 0.6
                ],
                [
                    'name' => 'GBP',
                    'value' => 0.88
                ]
    ];
});

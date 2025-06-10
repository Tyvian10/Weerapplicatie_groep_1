<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeerslagController;

Route::get('/admin/neerslag', [NeerslagController::class, 'create']);
Route::post('/admin/neerslag', [NeerslagController::class, 'store'])->name('neerslag.store');


Route::get('/', function () {
    return view('welcome');
});

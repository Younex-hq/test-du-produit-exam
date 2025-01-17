<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrudController;

Route::get('/', function () {
  // return view('welcome');
  return redirect('/crud');
});


Route::get('crud', [LaravelCrudController::class, 'index']);
Route::post('add', [LaravelCrudController::class, 'add']);

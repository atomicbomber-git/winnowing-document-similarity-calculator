<?php

use App\Http\Controllers\SimilarityCalculatorFormController;
use App\Http\Controllers\SimilarityCalculatorProcessController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", class_basename(SimilarityCalculatorFormController::class))
    ->name("similarity-calculator-form");

Route::post("/", class_basename(SimilarityCalculatorProcessController::class))
    ->name("similarity-calculator-process");

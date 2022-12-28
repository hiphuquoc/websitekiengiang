<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\RoutingController;
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

Route::get('/', [HomeController::class, 'home'])->name('main.home');
Route::get('/buildTocContentMain', [HomeController::class, 'buildTocContentMain'])->name('main.buildTocContentMain');
Route::get('/loadNotice', [AjaxController::class, 'loadNotice'])->name('main.loadNotice');
Route::post('/submitFormRequestWebsite', [AjaxController::class, 'submitFormRequestWebsite'])->name('ajax.submitFormRequestWebsite');
Route::get('/loadLoading', [AjaxController::class, 'loadLoading'])->name('ajax.loadLoading');
/* ===== ROUTING ALL ===== */
Route::get("/{slug}/{slug2?}/{slug3?}/{slug4?}/{slug5?}/{slug6?}/{slug7?}/{slug8?}/{slug9?}/{slug10?}", [RoutingController::class, 'routing'])->name('routing');

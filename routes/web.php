<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\CTV\AuthCTVController;
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
/* Xử lý trang CTV */
Route::get('/cong-tac-vien', [RoutingController::class, 'congTacVien'])->name('main.congTacVien');
Route::post('/registryCtv', [AuthCTVController::class, 'registryCtv'])->name('ajax.registryCtv');
Route::post('/loginCtv', [AuthCTVController::class, 'loginCtv'])->name('ajax.loginCtv');
/* tạo pass cho CTV */
Route::get('/createPasswordCtv', [AuthCTVController::class, 'createPasswordCtv'])->name('ajax.createPasswordCtv');
/* AJAX */
Route::get('/buildTocContentMain', [HomeController::class, 'buildTocContentMain'])->name('main.buildTocContentMain');
// Route::get('/loadNotice', [AjaxController::class, 'loadNotice'])->name('main.loadNotice');
Route::post('/submitFormRequestWebsite', [AjaxController::class, 'submitFormRequestWebsite'])->name('ajax.submitFormRequestWebsite');

Route::get('/loadLoading', [AjaxController::class, 'loadLoading'])->name('ajax.loadLoading');
/* ===== ROUTING ALL ===== */
Route::get("/{slug}/{slug2?}/{slug3?}/{slug4?}/{slug5?}/{slug6?}/{slug7?}/{slug8?}/{slug9?}/{slug10?}", [RoutingController::class, 'routing'])->name('routing');

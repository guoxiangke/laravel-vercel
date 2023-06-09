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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/test/cache', function (){
    $cacheKey = 'cacheKey';
    $data = Cache::store('redis')->get($cacheKey, now()->format('Y-m-d H:i:s'));
    Cache::store('redis')->put($cacheKey, $data, strtotime('tomorrow') - time());
    return [$data];
});

Route::get('/test/cache2', function (){
    $cacheKey = 'cacheKey2';
    $data = Cache::get($cacheKey, now()->format('Y-m-d H:i:s'));
    Cache::put($cacheKey, $data, strtotime('tomorrow') - time());
    return [$data];
});


Route::get('/test/env', function (){
    dd(env('DB_HOST'));
});

Route::get('/test/db', function () {
    dd(\App\Models\User::find(1)->get()->toArray());
});
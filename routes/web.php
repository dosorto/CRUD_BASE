<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

/*Route::get('/', function () {
    return view('app');
});*/

Route::get('/', function()
{
   return View::make('index');
});
Route::get('/personas', function()
{
   return View::make('personas');
});
Route::get('/estudiantes', function()
{
   return View::make('estudiantes');
});
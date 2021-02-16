<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Mail\Maileable;

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

Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('/Migraciones', [ViewController::class, 'migraciones'])->name('migraciones');
Route::get('/Seeders', [ViewController::class, 'seeders'])->name('seeders');
Route::get('/Mail', [ViewController::class, 'mail'])->name('mail');
Route::post('mail', 'MailController@store')->name('enviado');



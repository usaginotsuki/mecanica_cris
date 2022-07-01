<?php

use App\Http\Livewire\Base;
use App\Http\Livewire\EngranadeHelicoidalIngles;
use App\Http\Livewire\EngranadeHelicoidalMetrico;
use App\Http\Livewire\EngranajeConicoIngles;
use App\Http\Livewire\EngranajeConicoMetrico;
use App\Http\Livewire\EngranajeRectoIngles;
use App\Http\Livewire\EngranajeRectoMetrico;
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

/* Route::get('/', function () {
    return view('welcome');
})->name('home'); */

//COMPONENTES LIVEWIRE DINAMICOS
Route::get('/', Base::class)->name('home');
Route::get('/rectos-ingles', EngranajeRectoIngles::class)->name('recto-ingles');
Route::get('/rectos-metricos', EngranajeRectoMetrico::class)->name('recto-metricos');
Route::get('/helicoidales-ingles', EngranadeHelicoidalIngles::class)->name('helicoidal-ingles');
Route::get('/helicoidales-metricos', EngranadeHelicoidalMetrico::class)->name('helicoidal-metrico');
Route::get('/conicos-ingles', EngranajeConicoIngles::class)->name('conico-ingles');
Route::get('/conicos-metrico', EngranajeConicoMetrico::class)->name('conico-metrico');
Route::get('/pdf-eri', [EngranajeRectoIngles::class, 'pdfRI'])->name('pdf-eri');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

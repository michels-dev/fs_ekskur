<?php

use App\Http\Controllers\EkskurRutinController;
use App\Http\Controllers\EkskurTemporerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    return view('pages.landing-page-ekskur');
})->name('pages.landing-page-ekskur');

Route::name('pages.')->prefix('pages')->group(function(){
    // Form Ekskur Rutin
    Route::get('/form-ekskur-rutin', [EkskurRutinController::class, 'FormEkskurRutin'])->name('form-ekskur-rutin');

    // Form Ekskur Temporer
    Route::get('/form-ekskur-temporer', [EkskurTemporerController::class, 'FormEkskurTemporer'])->name('form-ekskur-temporer');
});


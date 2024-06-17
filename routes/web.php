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
    Route::post('store-ekskur-rutin', [EkskurRutinController::class, 'StoreEkskurRutin'])->name('store-ekskur-rutin');
    Route::get('show-ekskur-rutin/{id}', [EkskurRutinController::class, 'ShowEkskurRutin'])->name('show-ekskur-rutin');
    Route::post('update-ekskur-rutin/{id}', [EkskurRutinController::class, 'UpdateEkskurRutin'])->name('update-ekskur-rutin');
    Route::get('destroy-ekskur-rutin/{id}', [EkskurRutinController::class, 'DestroyEkskurRutin'])->name('destroy-ekskur-rutin');

    // Form Ekskur Temporer
    Route::get('/form-ekskur-temporer', [EkskurTemporerController::class, 'FormEkskurTemporer'])->name('form-ekskur-temporer');
    Route::post('/store-ekskur-temporer', [EkskurTemporerController::class, 'StoreEkskurTemporer'])->name('store-ekskur-temporer');
    Route::get('/show-ekskur-temporer/{id}', [EkskurTemporerController::class, 'ShowEkskurTemporer'])->name('show-ekskur-temporer');
    Route::post('/update-ekskur-temporer/{id}', [EkskurTemporerController::class, 'UpdateEkskurTemporer'])->name('update-ekskur-temporer');
    Route::get('/destroy-ekskur-temporer/{id}', [EkskurTemporerController::class, 'DestroyEkskurTemporer'])->name('destroy-ekskur-temporer');
});


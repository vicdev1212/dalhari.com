<?php

use App\Http\Controllers\DocsController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DocsController::class, 'index'])->name('dashboard');
    // Settings
    Route::get('/settings', function () {
        return view('settings');
    })->name('settings.index');

    // Shared routes
    Route::get('/shared', [DocsController::class, 'shared'])->name('shared.index');










    // Document routes
    Route::post('/save/doc', [DocsController::class, 'store'])->name('docs.store');
    Route::get('/doc/{id}', [DocsController::class, 'show'])->name('docs.show');
    Route::patch('/doc/{id}', [DocsController::class, 'update'])->name('docs.update');
    Route::delete('/doc/{id}', [DocsController::class, 'destroy'])->name('docs.destroy');
    // Get all docs for the user
    Route::get('/docs', [DocsController::class, 'getDocs'])->name('docs.getDocs');
    // Get all docs for the user
    Route::get('/latestdocs', [DocsController::class, 'getDocs'])->name('docs.getLatestDocs');
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

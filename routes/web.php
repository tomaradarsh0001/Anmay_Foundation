<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\WhatsAppController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\MessageController;
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
})->name('welcome');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('whatsapp')->name('whatsapp.')->group(function () {
    // CRUD for messages
    Route::get('/', [WhatsappController::class, 'index'])->name('index'); // List all messages
    Route::get('/create', [WhatsappController::class, 'create'])->name('create'); // Show create form
    Route::post('/store', [WhatsappController::class, 'store'])->name('store'); // Save new message
    Route::get('/{id}', [WhatsappController::class, 'show'])->name('show'); // Show single message
    Route::get('/{id}/edit', [WhatsappController::class, 'edit'])->name('edit'); // Show edit form
    Route::put('/{id}', [WhatsappController::class, 'update'])->name('update'); // Update message
    Route::delete('/{id}', [WhatsappController::class, 'destroy'])->name('destroy'); // Delete message

    // Contacts section (from persons table)
    Route::get('/contacts', [WhatsappController::class, 'contacts'])->name('contacts');

    // Send message
    Route::post('/send', [WhatsappController::class, 'send'])->name('send');

    // Message history
    Route::get('/history', [WhatsappController::class, 'history'])->name('history');
});
Route::resource('persons', PersonController::class)->except(['create','edit','show']);
Route::resource('messages', MessageController::class);

Route::get('/donate', [DonateController::class, 'index'])->name('donate');


require __DIR__.'/auth.php';

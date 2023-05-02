<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BorrowerProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\LenderController;
use App\Http\Controllers\NewsFeedController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoanController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('borrower/posts', BorrowerController::class)->except(['show']);
    Route::get('lender/newsfeed', [LenderController::class, 'newsfeed'])->name('lender.newsfeed');
    Route::post('lender/send-money/{borrower}', [LenderController::class, 'sendMoney'])->name('lender.send-money');
});

Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::middleware(['auth'])->group(function () {
    Route::get('/newsfeed', [NewsFeedController::class, 'index'])->name('newsfeed');
    Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth')->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->middleware('auth')->name('posts.store');
});
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/posts', [BorrowerProfileController::class, 'index'])->middleware('auth')->name('posts');
Route::get('/investors', [BorrowerController::class, 'investors'])->middleware('auth')->name('investors');
Route::get('/explore', [LenderController::class, 'explore'])->middleware('auth')->name('explore');


Route::get('/loan/create/{borrower_id}', [LoanController::class, 'create'])->name('loan.create');
Route::post('/loan/store', [LoanController::class, 'store'])->name('loan.store');


require __DIR__.'/auth.php';


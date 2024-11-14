<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/about-me', function () {
    return Inertia::render('AboutMe');
})->name('about-me.index');

Route::get('/', [FeedbackController::class, 'index'])->name('feedback.index');

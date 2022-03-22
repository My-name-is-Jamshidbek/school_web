<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', [\App\Http\Controllers\HomeController::class,'news'])->name('index');
Route::get('/news',[App\Http\Controllers\PostController::class, 'news'])->name('news');
Route::get('/news/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('news-item');
Route::get('/photos', [App\Http\Controllers\PhotoController::class, 'photos'])->name('photos');
Route::get('/certificate', [App\Http\Controllers\CertificateController::class, 'photos'])->name('certificate');
Route::get('/veterans', [App\Http\Controllers\VeteranController::class, 'veterans'])->name('veterans');
Route::get('/veterans/{veteran}', [App\Http\Controllers\VeteranController::class, 'show'])->name('veteran');
Route::view('/about','about')->name('about');
Route::view('/director','director')->name('director');
Route::view('/spirituality','spirit')->name('spirit');
Route::view('/train','train')->name('train');
Route::view('/special','special')->name('special');
Route::view('/contact','contact')->name('contact');
Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'teachers'])->name('teachers');
Route::get('/teacher/{teacher}', [App\Http\Controllers\TeacherController::class, 'show'])->name('teacher');
Route::get('/olimpians', [App\Http\Controllers\OlimpicController::class, 'olimpic'])->name('olimpics');
Route::get('/olimpian/{olimpic}', [App\Http\Controllers\OlimpicController::class, 'show'])->name('olimpian');
Route::get('/actives', [App\Http\Controllers\ActiveController::class, 'actives'])->name('actives');
Route::get('/active/{active}', [App\Http\Controllers\ActiveController::class, 'show'])->name('active');
Route::post('/contact', [\App\Http\Controllers\MessageController::class, 'store'])->name('messages.store');
Auth::routes([
    'confirm' => false,
    'login' => true,
    'logout' => true,
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('posts', App\Http\Controllers\PostController::class);
    Route::resource('photo', App\Http\Controllers\PhotoController::class);
    Route::resource('certificate', App\Http\Controllers\CertificateController::class);
    Route::resource('veteran', App\Http\Controllers\VeteranController::class);
    Route::resource('teacher', App\Http\Controllers\TeacherController::class);
    Route::resource('olimpic', App\Http\Controllers\OlimpicController::class);
    Route::resource('active', App\Http\Controllers\ActiveController::class);
    Route::resource('messages', App\Http\Controllers\MessageController::class);




});


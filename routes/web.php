<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\Frontend\ContactFrontendController;
use App\Http\Controllers\Frontend\PostController as FrontendPostController;
use App\Http\Controllers\Frontend\ServiceController as FrontendServiceController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [WelcomeController::class , 'index']);
Route::get('/blogs',[FrontendPostController::class,'index'])->name('blogs.index');
Route::get('/blogs/{post}',[FrontendPostController::class,'show'])->name('blogs.show');
Route::get('/a-propos',[AboutController::class,'apropos']);
Route::get('/services',[FrontendServiceController::class,'services']);
Route::get('/contacts',[ContactFrontendController::class,'index'])->name('contacts.index');
Route::post('/contacts',[ContactFrontendController::class,'store'])->name('contacts.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('/posts', PostController::class);
    Route::resource('/services',ServiceController::class);
    Route::resource('/contacts',ContactAdminController::class);
});

require __DIR__.'/auth.php';

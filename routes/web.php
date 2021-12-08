<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\CategoryController;


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

// Main Page
Route::get('/', [HomeController::class,'show']);
Route::get('/about', [AboutController::class,'showAbout']);
Route::get('/posts', [PostController::class, 'index']);

// Single Post Page
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Categories Page
Route::get('/categories/',[CategoryController::class,'show']);

// Login Route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register Route
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard Route
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');
Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Dashboard Khusus Admin
Route::get('/dashboard/categories/checkSlug',[AdminCategoryController::class, 'checkSlug'])->middleware('is_admin');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('is_admin');


<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'profile'])->name('profile');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;

Route::get('/', [StaticPageController::class, 'welcome'])->name('welcome');
Route::get('/about', [StaticPageController::class, 'profile'])->name('profile');
Route::get('/dashboard', [StaticPageController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [StaticPageController::class, 'faq'])->name('faq');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

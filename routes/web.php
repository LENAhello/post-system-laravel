<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
 
Route::resource('posts', PostController::class);
Route::get('post/{id}', [PostController::class, 'show']);

Route::get('comment/create', [CommentController::class, 'create']);

Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

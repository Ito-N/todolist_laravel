<?php
use App\Http\Controllers\front\PostController;

Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/{id}', [PostController::class, 'show'])->name('post.show');

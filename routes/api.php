<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReplyController;

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'getAllPosts']);
    Route::post('/', [PostController::class, 'createPost']);
    Route::get('/{post}', [PostController::class, 'getPost']);
    Route::get('/{post}/comments', [CommentController::class, 'getAllComments']);
    Route::get('/{post}/comments/{id}', [CommentController::class, 'getComment']);
    Route::post('/{post}/comments', [CommentController::class, 'addComment']);
    Route::post('/{post}/comments/{id}/replies', [CommentController::class, 'addReply']);
});



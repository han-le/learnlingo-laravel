<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\PostController::class, 'getHomePage']);

Route::get('/search', [\App\Http\Controllers\PostController::class, 'getSearch'])->name('search-results');

Route::get('/{post:slug}', function (Post $post) {
    return view('post-page', [
        'post' => $post,
        'allPosts' => Post::all()
    ]);
});

Route::get('/category/{category:category_slug}', function (\App\Models\Category $category) {
    return view('homepage', [
        'allPosts' => $category->postsWithSameCategory()->get()
    ]);
});

Route::get('/donate', function () {
    return view ('donate');
});

Route::get('/quick-links', function () {
    return view ('quick-links');
});

Route::get('/test', function () {
    return view ('test');
});



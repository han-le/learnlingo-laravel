<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);

Route::get('/search', [\App\Http\Controllers\PostController::class, 'getSearch'])->name('search-results');

Route::get('/category/{category:category_slug}', function (\App\Models\Category $category) {
    return view('homepage', [
        'allPosts' => $category->postsWithSameCategory()->paginate(10)
    ]);
})->name('category');

Route::get('/donate', function () {
    return view ('donate');
});

Route::get('/quick-links', function () {
    return view ('quick-links');
});

Route::get('/test', function () {
    return view ('test');
});

// Register 
Route::get('register', [ \App\Http\Controllers\RegisterController::class, 'create']);

Route::post('register',[ \App\Http\Controllers\RegisterController::class, 'show']);

//Put this at the end
Route::get('/{post:slug}', function (Post $post) {
    return view('post-page', [
        'post' => $post,
        'allPosts' => Post::all()
    ]);
});



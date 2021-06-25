<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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
Route::get('register', [ RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [ RegisterController::class, 'store'])->middleware('guest');

//Log out
Route::post('logout', [ SessionController::class, 'destroy']);

//Log in
Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

//Put this at the end
Route::get('/{post:slug}', function (Post $post) {
    return view('post-page', [
        'post' => $post,
        'allPosts' => Post::all()
    ]);
});



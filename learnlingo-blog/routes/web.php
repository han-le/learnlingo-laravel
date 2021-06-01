<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
    return view('homepage', [
        'allPosts' => Post::latest()->with('category')->get(),

    ]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('post-page', [
        'post' => $post,
    ]);
});

Route::get('/category/{category:category_slug}', function (\App\Models\Category $category) {
//    dd($category->postsWithSameCategory());
    return view('homepage', [
        'allPosts' => $category->postsWithSameCategory()->get()
    ]);
});
